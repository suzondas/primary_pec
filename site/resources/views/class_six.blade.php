<html>
<! ethnic_students, Special_students, classwise_students, repeater_students table->
<head>
    <link href="css/app.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>
<div class="container kalpurus" id="app">
    {{--Include Header--}}
    @include('common.header')
    {{--Include Header End--}}

    <div class="first_body">
        <div class="student_info border" style="padding:10px; font-size:14px">
            <form action="class_six_save" method="post">
                {{ csrf_field()}}
                <div class="student_info1">
                    <div class="table_heading">
                        <span> <h5 class="font-weight-bold" style="background-color:#4dc0b5; padding: 10px"> ১৪. শিক্ষার্থী সংক্রান্ত: <span style="font-size: 18px; font-weight: normal">ষষ্ঠ-অষ্টম শ্রেণি </span></h5></span>
                    </div>
                    <div class="row border" style="margin:0px">
                        <div class="col-md-6 border justify-content-center align-self-center">
                            <div class="preethnic_number">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th colspan="4" style="text-align: center">ভর্তিকৃত উপজাতি/ক্ষুদ্র নৃ-গোষ্ঠী
                                            শিক্ষার্থীর সংখ্যা
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">উপজাতি/ক্ষুদ্র নৃ-গোষ্ঠীর ধরণ</th>
                                        <th scope="col">বালক</th>
                                        <th scope="col">বালিকা</th>
                                        <th scope="col">মোট</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <?php $instRow = $instRowObj->ethnic_students;?>
                                        <th scope="row">চাকমা</th>
                                        <td><input type="number" style="width: 50px" name="cakma_boy" value="{{$instRow->cakma_boy}}"></td>
                                        <td><input type="number" style="width: 50px" name="cakma_girl" value="{{$instRow->cakma_girl}}"></td>
                                        <td><input type="number" style="width: 50px" name="cakma_total" value="{{$instRow->cakma_total}}"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">মারমা</th>
                                        <td><input type="number" style="width: 50px" name="marma_boy" value="{{$instRow->marma_boy}}"></td>
                                        <td><input type="number" style="width: 50px" name="marma_girl" value="{{$instRow->marma_girl}}"></td>
                                        <td><input type="number" style="width: 50px" name="marma_total" value="{{$instRow->marma_total}}"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ত্রিপুরা</th>
                                        <td><input type="number" style="width: 50px" name="tripura_boy" value="{{$instRow->tripura_boy}}"></td>
                                        <td><input type="number" style="width: 50px" name="tripura_girl" value="{{$instRow->tripura_girl}}"></td>
                                        <td><input type="number" style="width: 50px" name="tripura_total" value="{{$instRow->tripura_total}}"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">গারো</th>
                                        <td><input type="number" style="width: 50px" name="garo_boy" value="{{$instRow->garo_boy}}"></td>
                                        <td><input type="number" style="width: 50px" name="garo_girl" value="{{$instRow->garo_girl}}"></td>
                                        <td><input type="number" style="width: 50px" name="garo_total" value="{{$instRow->garo_total}}"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">সাঁওতাল</th>
                                        <td><input type="number" style="width: 50px" name="saotal_boy" value="{{$instRow->saotal_boy}}"></td>
                                        <td><input type="number" style="width: 50px" name="saotal_girl" value="{{$instRow->saotal_girl}}"></td>
                                        <td><input type="number" style="width: 50px" name="saotal_total" value="{{$instRow->saotal_total}}"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">মনিপুরি</th>
                                        <td><input type="number" style="width: 50px" name="monipuri_boy" value="{{$instRow->monipuri_boy}}"></td>
                                        <td><input type="number" style="width: 50px" name="monipuri_girl" value="{{$instRow->monipuri_girl}}"></td>
                                        <td><input type="number" style="width: 50px" name="monipuri_total" value="{{$instRow->monipuri_total}}"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">সাদরি (ওরাও)</th>
                                        <td><input type="number" style="width: 50px" name="sadri_boy" value="{{$instRow->sadri_boy}}"></td>
                                        <td><input type="number" style="width: 50px" name="sadri_girl" value="{{$instRow->sadri_girl}}"></td>
                                        <td><input type="number" style="width: 50px" name="sadri_total" value="{{$instRow->sadri_total}}"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">অন্যান্য</th>
                                        <td><input type="number" style="width: 50px" name="other_ethnic_boy" value="{{$instRow->other_ethnic_boy}}"></td>
                                        <td><input type="number" style="width: 50px" name="other_ethnic_girl" value="{{$instRow->other_ethnic_girl}}"></td>
                                        <td><input type="number" style="width: 50px" name="other_ethnic_total" value="{{$instRow->other_ethnic_total}}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6 border ">
                            <div class="prespecial_number">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th colspan="4" style="text-align: center">ভর্তিকৃত বিশেষ চাহিদা সম্পন্ন শিক্ষার্থীর সংখ্যা</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">বিশেষ চাহিদার ধরণ</th>
                                        <th scope="col">বালক</th>
                                        <th scope="col">বালিকা</th>
                                        <th scope="col">মোট</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <?php $instRow = $instRowObj->special_students;?>
                                        <th scope="row">শারীরিক </th>
                                        <td><input type="number" style="width: 50px" name="physical_boy" value="{{$instRow->physical_boy}}"></td>
                                        <td><input type="number" style="width: 50px" name="physical_girl" value="{{$instRow->physical_girl}}"></td>
                                        <td><input type="number" style="width: 50px" name="physical_total" value="{{$instRow->physical_total}}"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ক্ষীণদৃষ্টি</th>
                                        <td><input type="number" style="width: 50px" name="myopia_boy" value="{{$instRow->myopia_boy}}"></td>
                                        <td><input type="number" style="width: 50px" name="myopia_girl" value="{{$instRow->myopia_girl}}"></td>
                                        <td><input type="number" style="width: 50px" name="myopia_total" value="{{$instRow->myopia_total}}"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">ক্ষীণশ্রবণ</th>
                                        <td><input type="number" style="width: 50px" name="impaired_hearing_boy" value="{{$instRow->impaired_hearing_boy}}"></td>
                                        <td><input type="number" style="width: 50px" name="impaired_hearing_girl" value="{{$instRow->myopia_total}}"></td>
                                        <td><input type="number" style="width: 50px" name="impaired_hearing_total" value="{{$instRow->myopia_total}}"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">বাকপ্রতিবন্ধি</th>
                                        <td><input type="number" style="width: 50px" name="speech_impaired_boy" value="{{$instRow->speech_impaired_boy}}"></td>
                                        <td><input type="number" style="width: 50px" name="speech_impaired_girl" value="{{$instRow->speech_impaired_girl}}"></td>
                                        <td><input type="number" style="width: 50px" name="speech_impaired_total" value="{{$instRow->speech_impaired_total}}"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">বুদ্ধিবৃত্তিক</th>
                                        <td><input type="number" style="width: 50px" name="intl_handicapped_boy" value="{{$instRow->intl_handicapped_boy}}"></td>
                                        <td><input type="number" style="width: 50px" name="intl_handicapped_girl" value="{{$instRow->intl_handicapped_girl}}"></td>
                                        <td><input type="number" style="width: 50px" name="intl_handicapped_total" value="{{$instRow->intl_handicapped_total}}"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">অটিস্টিক</th>
                                        <td><input type="number" style="width: 50px" name="autistic_boy" value="{{$instRow->autistic_boy}}"></td>
                                        <td><input type="number" style="width: 50px" name="autistic_girl" value="{{$instRow->autistic_girl}}"></td>
                                        <td><input type="number" style="width: 50px" name="autistic_total" value="{{$instRow->autistic_total}}"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">অন্যান্য</th>
                                        <td><input type="number" style="width: 50px" name="other_boy" value="{{$instRow->other_boy}}"></td>
                                        <td><input type="number" style="width: 50px" name="other_girl" value="{{$instRow->other_girl}}"></td>
                                        <td><input type="number" style="width: 50px" name="other_total" value="{{$instRow->other_total}}"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row border" style="margin:0px">
                        <div class="col-md-6 border ">
                            <div class="prerepeater_student">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th colspan="4" style="text-align: center">২০২০ সালে একই শ্রেণিতে
                                            অধ্যয়ন/পুনরাবৃত্তি <br>
                                            (২০১৯ সালের শিক্ষার্থীদের মধ্যে কতজন একই শ্রেণিতে অধ্যয়ন/পুনরাবৃত্তি করছে)
                                        </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">শিক্ষার্থীর ধরণ</th>
                                        <th scope="col">বালক</th>
                                        <th scope="col">বালিকা</th>
                                        <th scope="col">মোট</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <?php $instRow = $instRowObj->repeater_students;?>
                                        <th scope="row">একই শ্রেণিতে অধ্যয়ন/পুনরাবৃত্তি</th>
                                        <td><input type="number" style="width: 50px" name="repeater_boy" value="{{$instRow->repeater_boy}}"></td>
                                        <td><input type="number" style="width: 50px" name="repeater_girl" value="{{$instRow->repeater_girl}}"></td>
                                        <td><input type="number" style="width: 50px" name="repeater_total" value="{{$instRow->repeater_total}}"></td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <div class="col-md-6 border justify-content-center align-self-center">
                            <div class="preclasswise_student">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th colspan="4" style="text-align: center">শ্রেণিভিত্তিক শিক্ষার্থীর সংখ্যা
                                            (২০১৯ সালের ডিসেম্বর ও <br> ২০২০ সালের ২৯ ফ্রেব্রুয়ারি পর্যন্ত ভর্তি/হাজিরা রেজিস্টার দেখে তথ্য দিন) </th>
                                    </tr>
                                    <tr>
                                        <th scope="col">সাল</th>
                                        <th scope="col">বালক</th>
                                        <th scope="col">বালিকা</th>
                                        <th scope="col">মোট</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <?php $instRow = $instRowObj->classwise_students;?>
                                        <th scope="row">২০১৯</th>
                                        <td><input type="number" style="width: 50px" name="boy_y_first" value="{{$instRow->boy_y_first}}"></td>
                                        <td><input type="number" style="width: 50px" name="girl_y_first" value="{{$instRow->girl_y_first}}"></td>
                                        <td><input type="number" style="width: 50px" name="total_y_first" value="{{$instRow->total_y_first}}"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">২০২০</th>
                                        <td><input type="number" style="width: 50px" name="boy_y_second" value="{{$instRow->boy_y_second}}"></td>
                                        <td><input type="number" style="width: 50px" name="girl_y_second" value="{{$instRow->girl_y_second}}"></td>
                                        <td><input type="number" style="width: 50px" name="total_y_second" value="{{$instRow->total_y_second}}"></td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="pull-right">

                    <input type="submit" class="btn btn-primary btn-lg" style="text-align:right; margin-top:20px" value="Save and Next">

                </div>
            </form>
        </div>
        <div style="clear: both">

        </div>

        {{--Include Footer--}}
        @include('common.footer')
        {{--Include Footer End--}}

    </div>
    <script src="js/app.js" defer></script>
</body>
</html>
