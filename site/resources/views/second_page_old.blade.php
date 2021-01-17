@if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<div>
<head>

    <link href="css/app.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

</head>
<div>
<div class="container kalpurus" id="app">
    <div class="header">
        <div class="front_text">
            <div class="">
                <img class="float-right" style="" src="img/resize.jpg" alt="mujib" height="100px" width="150px">
            </div>
            <div style="clear:both"></div>
            <div class="row">
                <div class="col-12 text-center">
                    <span> গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</span>
                    <br>
                    <span> শিক্ষা মন্ত্রণালয়</span>
                    <br>
                    <span> বাংলাদেশ শিক্ষা তথ্য ও পরিসংখ্যান ব্যুরো (ব্যানবেইস) </span>
                    <br>
                    <span> ১ জহির রায়হান রোড (পলাশী-নীলক্ষেত), ঢাকা-১২০৫</span>
                    <br>
                    <span> www.banbeis.gov.bd</span>
                    <br>
                    <span> e-mail: info@banbeis.gov.bd</span>
                </div>

            </div>
        </div>
    </div>
    <hr>
    <div class="form_name">
        <div class="heading col-md-12">
            <h4 style="text-align:center"> বার্ষিক প্রাথমিক বিদ্যালয় শুমারি-২০২০ এর পিইসি তথ্য সংগ্রহ ফরম </h4>
        </div>
    </div>
    <hr>
    <div class="topnav">
        <a href="#">প্রথম পাতা</a>
        <a href="#" class="active">দ্বিতীয় পাতা</a>
        <a href="#">তৃতীয় পাতা</a>
        <a href="#">প্রাক-প্রাথমিক</a>
        <a href="#">প্রথম শ্রেণি</a>
        <a href="#">দ্বিতীয় শ্রেণি</a>
        <a href="#">তৃতীয় শ্রেণি</a>
        <a href="#">চতুর্থ শ্রেণি</a>
        <a href="#">পঞ্চম শ্রেণি</a>
        <a href="#">ষষ্ঠ-অষ্টম শ্রেণি</a>
        <a href="#">শিক্ষক ও কর্মচারী</a>
    </div>
    <div class="first_body">
        <div class="institute_info border" style="padding:10px; font-size:14px">
            <form class="form-group">
                <div class="table_heading">
                    <span style="font-weight: bold; font-size: 18px">  ২. ক) বিদ্যালয়ের সাধারণ তথ্যাবলি </span><br>
                </div>
        </div>

        <div class="general_info">
            <div class="row border" style="margin:0px">
                <div class="col-md-6 border justify-content-center align-self-center">
                    <table class="table academic">
                        <tbody>
                        <tr>
                            <th scope="row"><label for="academic_function_yn">বিদ্যালয়ে একাডেমিক কার্যক্রম চালু আছে
                                    কি? </label></th>
                            <td>
                                <select class="custom-select" style="width:70px" name="acdmic_function_yn">
                                    <option selected value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">বিদ্যালয়ে প্রাক-প্রাথমিক শ্রেণি চালু আছে কি? </label></th>
                            <td>
                                <select class="custom-select" style="width:70px" name="pprimary_exist_yn">
                                    <option selected value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">বিদ্যালয়ের গ্রেড </label></th>
                            <td>
                                <select class="custom-select" style="width:70px" name="school_grade">
                                    <option selected value="1">এ</option>
                                    <option value="2">বি</option>
                                    <option value="3">সি</option>
                                    <option value="4">ডি</option>
                                    <option value="5">প্রযোজ্য নয়</option>
                                    <option value="6">নির্ধারণ হয়নি</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">নিরাপদ পানীয় জলের ব্যবস্থা আছে কি? </label></th>
                            <td>
                                <select class="custom-select" style="width:70px" name="safe_water_yn">
                                    <option selected value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">বিদ্যালয়ের ভবন সমূহ নিজস্ব সম্পত্তিতে প্রতিষ্ঠিত? </label>
                            </th>
                            <td>
                                <select class="custom-select" style="width:70px" name="blding_own_land_yn">
                                    <option selected value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">বিদ্যালয়টি আশ্রয়কেন্দ্র কাম বিদ্যালয় হিসেবে নির্মিত
                                    কি?</label></th>
                            <td>
                                <select class="custom-select" style="width:70px" name="cycln_shelter_yn">
                                    <option selected value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">রেজিস্ট্রেশন/ নিবন্ধনের সন </label></th>
                            <td><input type="number" style="width: 70px" name="reg_year"></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">বিদ্যুৎ সংযোগ আছে কি? </label></th>
                            <td>
                                <select class="custom-select" style="width:70px" name="electricity_yn">
                                    <option selected value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">বিদ্যালয়ের ভিতরে ও বাহিরে (ভাইরাস/ব্যাক্টেরিয়ামুক্ত করতে)
                                    জীবাণুনাশক ব্যাবহার করা হয় কি না?</label></th>
                            <td>
                                <select class="custom-select" style="width:70px" name="sntz_facility_yn">
                                    <option selected value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">একই ক্যাম্পাসে/ভবনে একাধিক স্কুল পরিচালিত হয় কি না? </label>
                            </th>
                            <td>
                                <select class="custom-select" style="width:70px" name="mltpl_inst_cmps_yn">
                                    <option selected value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>


                <div class="col-6 border justify-content-center align-self-center">
                    <table class="table academic">
                        <tbody>
                        <tr>
                            <th scope="row"><label for="academic_function_yn">শিখন মাধ্যম? </label></th>
                            <td>
                                <select class="custom-select" style="width:90px" name="learning_media">
                                    <option selected value="1">বাংলা</option>
                                    <option value="2">ইংরেজি ভার্সন</option>
                                    <option value="3">উভয়</option>
                                    <option value="4">ইংরেজি মিডিয়াম</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">শিফট সংখ্যা? </label></th>
                            <td><input type="number" style="width: 90px" name=""></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">বিদ্যালয়ে টয়লেট (ওয়াশ ব্লক ব্যতীত) আছে কি? </label></th>
                            <td>
                                <select class="custom-select" style="width:90px">
                                    <option selected value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">বিদ্যালয়ে ওয়াশ ব্লক নির্মিত হয়েছে কি? </label></th>
                            <td>
                                <select class="custom-select" style="width:90px">
                                    <option selected value="1">নির্মিত</option>
                                    <option value="2">নির্মাণাধীন</option>
                                    <option value="3">না</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">শহীদ মিনার আছে কি? </label>
                            </th>
                            <td>
                                <select class="custom-select" style="width:90px">
                                    <option selected value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">প্রতিষ্ঠার সন </label></th>
                            <td><input type="number" style="width: 90px" name=""></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">জাতীয়করণের সন </label></th>
                            <td><input type="number" style="width: 90px" name=""></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">সীমানা প্রাচীর আছে কি? </label></th>
                            <td>
                                <select class="custom-select" style="width:90px">
                                    <option selected value="1">পাকা প্রাচীর</option>
                                    <option value="2">নাই</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="">প্রতিবন্ধি ও অটিস্টিক শিশুদের জন্য র‍্যাম্পসহ উপযুক্ত টয়লেট
                                    আছে কি?</label></th>
                            <td>
                                <select class="custom-select" style="width:90px">
                                    <option selected value="1">হ্যাঁ</option>
                                    <option value="2">না</option>
                                </select>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <br>
            </div>
        </div>


        <div class="Second_body">
            <div class="curriculum border" style="padding:10px; font-size:14px">
                <form class="form-group">
                    <span style="font-weight: bold; font-size: 18px"> ২. খ) বিদ্যালয়ের কোন কোন শ্রেণিতে পাঠদান করানো হয় (বর্ণিত শ্রেণি চালু থাকলে হ্যাঁ অথবা না লিখুন)</span>
                        <div class="col-md-12 border justify-content-center align-self-center">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">প্রাক-প্রাথমিক</th>
                                    <th scope="col">প্রথম শ্রেণি</th>
                                    <th scope="col">দ্বিতীয় শ্রেণি</th>
                                    <th scope="col">তৃতীয় শ্রেণি</th>
                                    <th scope="col">চতুর্থ শ্রেণি</th>
                                    <th scope="col">পঞ্চম শ্রেণি</th>
                                    <th scope="col">ষষ্ঠ শ্রেণি</th>
                                    <th scope="col">সপ্তম শ্রেণি</th>
                                    <th scope="col">অষ্টম শ্রেণি</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <select class="custom-select" style="width:80px">
                                            <option selected value="1">হ্যাঁ</option>
                                            <option value="2">না</option>
                                    </td>
                                    <td>
                                        <select class="custom-select" style="width:80px">
                                            <option selected value="1">হ্যাঁ</option>
                                            <option value="2">না</option>
                                    </td>
                                    <td>
                                        <select class="custom-select" style="width:80px">
                                            <option selected value="1">হ্যাঁ</option>
                                            <option value="2">না</option>
                                    </td>
                                    <td>
                                        <select class="custom-select" style="width:80px">
                                            <option selected value="1">হ্যাঁ</option>
                                            <option value="2">না</option>
                                    </td>
                                    <td>
                                        <select class="custom-select" style="width:80px">
                                            <option selected value="1">হ্যাঁ</option>
                                            <option value="2">না</option>
                                    </td>
                                    <td>
                                        <select class="custom-select" style="width:80px">
                                            <option selected value="1">হ্যাঁ</option>
                                            <option value="2">না</option>
                                    </td>
                                    <td>
                                        <select class="custom-select" style="width:80px">
                                            <option selected value="1">হ্যাঁ</option>
                                            <option value="2">না</option>
                                    </td>
                                    <td>
                                        <select class="custom-select" style="width:80px">
                                            <option selected value="1">হ্যাঁ</option>
                                            <option value="2">না</option>
                                    </td>
                                    <td>
                                        <select class="custom-select" style="width:80px">
                                            <option selected value="1">হ্যাঁ</option>
                                            <option value="2">না</option>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
        </div>
        <div class="third_body">
            <div class="institute_info border" style="padding:10px; font-size:14px">
                <form class="form-group">
                    <div class="table_heading">
                        <span style="font-weight: bold; font-size: 18px">  ২. গ) বিশেষ চাহিদাসম্পন্ন শিক্ষার্থীর জন্য কোন কোন সুবিধা আছে </span><br>
                    </div>
            </div>

            <div class="special_stud_facilities">
                <div class="row border" style="margin:0px">
                    <div class="col-md-6 border justify-content-center align-self-center">
                        <table class="table special">
                            <tbody>
                            <tr>
                                <th scope="row"><label for="academic_function_yn">শারীরিক প্রতিবন্ধিদের জন্য র‍্যাম্প আছে কি না? </label></th>
                                <td>
                                    <select class="custom-select" style="width:70px">
                                        <option selected value="1">হ্যাঁ</option>
                                        <option value="2">না</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="">শারীরিক প্রতিবন্ধিদের গমনোপযোগী ওয়াশব্লক কি না? </label></th>
                                <td>
                                    <select class="custom-select" style="width:70px">
                                        <option selected value="1">হ্যাঁ</option>
                                        <option value="2">না</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <th scope="row"><label for="">শারীরিক প্রতিবন্ধিদের হুইল চেয়ার আছে কি না? </label></th>
                                <td>
                                    <select class="custom-select" style="width:70px">
                                        <option selected value="1">হ্যাঁ</option>
                                        <option value="2">না</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="">শারীরিক প্রতিবন্ধিদের ক্রাচ আছে কি না? </label>
                                </th>
                                <td>
                                    <select class="custom-select" style="width:70px">
                                        <option selected value="1">হ্যাঁ</option>
                                        <option value="2">না</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><label for=""> দৃষ্টি ফেন্সিং আছে কি না?</label></th>
                                <td>
                                    <select class="custom-select" style="width:70px">
                                        <option selected value="1">হ্যাঁ</option>
                                        <option value="2">না</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="">দৃষ্টি প্রতিবন্ধিদের কালার কন্ট্রাস্ট আছে কি না? </label></th>
                                <td>
                                    <select class="custom-select" style="width:70px">
                                        <option selected value="1">হ্যাঁ</option>
                                        <option value="2">না</option>
                                    </select>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-6 border justify-content-center align-self-center">
                        <table class="table academic">
                            <tbody>
                            <tr>
                                <th scope="row"><label for="">দৃষ্টি প্রতিবন্ধিদের ডেইজি বুক আছে কি না? </label></th>
                                <td>
                                    <select class="custom-select" style="width:90px">
                                        <option selected value="1">হ্যাঁ</option>
                                        <option value="2">না</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="">দৃষ্টি প্রতিবন্ধিদের ব্রেইল বই আছে কি না? </label></th>
                                <td>
                                    <select class="custom-select" style="width:90px">
                                        <option selected value="1">হ্যাঁ</option>
                                        <option value="2">না</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="">বাক প্রতিবন্ধিদের Sign Language Tutor আছে কি না? </label></th>
                                <td>
                                    <select class="custom-select" style="width:90px">
                                        <option selected value="1">হ্যাঁ</option>
                                        <option value="2">না</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="">বাক প্রতিবন্ধিদের Sign Language Manual আছে কি না? </label></th>
                                <td>
                                    <select class="custom-select" style="width:90px">
                                        <option selected value="1">হ্যাঁ</option>
                                        <option value="2">না</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="">শ্রবণ প্রতিবন্ধিদের নীরব পরিবেশ আছে কি না? </label></th>
                                <td>
                                    <select class="custom-select" style="width:90px">
                                        <option selected value="1">হ্যাঁ</option>
                                        <option value="2">না</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"><label for="">শ্রবণ প্রতিবন্ধিদের Hearing Aid আছে কি না? </label></th>
                                <td>
                                    <select class="custom-select" style="width:90px">
                                        <option selected value="1">হ্যাঁ</option>
                                        <option value="2">না</option>
                                    </select>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                </div>
            </div>
       </div>
       </div>
</form>
<div class="pull-right kalpurus">
    <a href="third_page">
        <button type="button" class="btn btn-primary btn-lg" style="text-align:right; margin-top:20px">পরবর্তী
            পাতা
        </button>
    </a>
</div>
<div style="clear: both">

</div>

<hr>
<div class="footer">
    <div class="row footer">
        <div class="col-md-12"
             style="text-align:center; padding:5px; font-family: 'Lucida Sans'; background-color: #a1cbef;">
            <span> &copy; Powered by ICT Division, BANBEIS</span> <br>
            <span> Ministry of Education</span>
        </div>
    </div>
</div>
<hr>
</div>
</div>
</div>
</div>
<script src="js/app.js" defer></script>
</body>
</html>