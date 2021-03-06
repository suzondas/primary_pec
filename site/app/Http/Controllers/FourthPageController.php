<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buildings;
use App\Building_infos;
use Session;

class FourthPageController extends Controller
{
    public function read(Request $request)
    {


        $instRow = [];
        //deal with Buildings Table
        try {
            $row = Buildings::where('institute_id', '=', $request->session()->get('institute_id'))->firstOrFail();
            array_push($instRow, $row);
        } catch (\Exception $e) {
            // do task when error
            $row = new Buildings();
            $row->institute_id = $request->session()->get('institute_id');
            try {
                $row->save(); // returns false
                array_push($instRow, $row);
            } catch (\Exception $e) {
                echo $e;
            }
        }

        //deal with Building_infos Table
        $row = Building_infos::where('institute_id', '=', $request->session()->get('institute_id'))->get();
        //print_r($row); exit;
        $rowCount = $row->count();
        if ($rowCount == 0) {
            $row = new Building_infos();
            $row->building_no = 0;
            $row->year = 2020;
            $row->institute_id = $request->session()->get('institute_id');
            try {
                $row->save(); // returns false
                array_push($instRow, $row);
            } catch (\Exception $e) {
                echo $e;
            }
        } else {
            array_push($instRow, $row);
        }

        // do task when error

        $instRowObj = new \stdClass();
        $instRowObj->buildings = $instRow[0];
        $instRowObj->building_infos = $instRow[1];
        return view('fourth_page')->with('instRowObj', $instRowObj);

    }

    public function updateOrcreate(Request $request)
    {
        $reqData = $request->all();

        if ($request->method() == 'POST') {

            Buildings::where('institute_id', '=', $request->session()->get('institute_id'))->delete();
            $row = new Buildings();
            $row->institute_id = $request->session()->get('institute_id');
            $row->number_of_building = $reqData['buildings_number'];
            try {
                $row->save(); // returns false
            } catch (\Exception $e) {
                return response(json_encode(['error' => $e->getMessage()]), 401);
            }


            for ($i = 0; $i < sizeof($reqData['building_infos']); $i++) {
                $reqData['building_infos'][$i]['institute_id'] = $request->session()->get('institute_id');
                $reqData['building_infos'][$i]['year'] = 2020;
            }

            try {
                Building_infos::where('institute_id', '=', $request->session()->get('institute_id'))->delete();
                Building_infos::insert($reqData['building_infos']);
                Session::flash('message', 'Data Submitted Successfully!');
                return response('OK', 200);
            } catch (\Exception $e) {
                return response(json_encode(['error' => $e->getMessage()]), 401);
            }
        }
    }
}
