<html>
<head>

    <link href="css/app.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

</head>
<body>
<div class="container kalpurus" id="app">
    <div class="header">
        <div class="front_text">
            <div class="">
                <img class="float-right" style="" src="img/resize.jpg" alt="mujib" height="100px" width="150px">
            </div>
            <div style="clear:both"></div>
            <div class="row">
                <div class="col-12 text-center" style="font-size: 1.2em;">
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
            <h4 style="text-align:center"> বার্ষিক প্রাথমিক বিদ্যালয় শুমারি-২০২০ এর পিইসি তথ্য সংগ্রহ ফরম <h6>
        </div>
    </div>
    <hr>
    <div class="topnav">
        <a class="active" href="#">প্রথম পাতা</a>
        <a href="#">দ্বিতীয় পাতা</a>
        <a href="#">তৃতীয় পাতা</a>
        <a href="#">চতুর্থ পাতা</a>
    </div>

    <div class="first_body">
        <div class="institute_info border" style="padding:10px">
            <form class="form-group">
                <div class="table_heading">
                    ১. ক) বিদ্যালয়ের নাম ও ঠিকানা:<br>
                </div>
                <div class="row">
                    <div class="col-6 form-group form-inline">
                        <label for="school_code" class="label-text">বিদ্যালয়ের EMIS কোড:</label> &nbsp;
                        <input type="text" style="width:auto" class="form-control" name="school_code" id="school_code">
                    </div>
                    <div class="col-4 form-group form-inline">
                        <label class="label-text" for="school_type">বিদ্যালয়ের ধরণ:</label> &nbsp;
                        <input type="text" style="width:auto" class="form-control" name="school_type" id="school_type">
                    </div>
                </div>
                <div class="row border" style="margin:0px">
                    <div class="col-md-1 border text-center">
                        বিদ্যালয়ের নাম (গেজেট অনুযায়ী):
                    </div>
                    <div class="col-11 border">
                        <div class="row form-group form-inline">
                            <label class="label-text" for="bangla_name" style="width:80px">বাংলায়: </label> &nbsp;
                            <input type="text" style="width:450px" class="form-control" name="bangla_name"
                                   id="bangla_name">
                        </div>
                        <div class="row form-group form-inline">
                            <label class="label-text" for="english_name" style="width:80px"> In English </label> &nbsp;
                            <input type="text" style="width:450px" class="form-control" name="english_name"
                                   id="english_name">
                        </div>
                    </div>

                </div>

                <br>
                <div class="table_heading">
                    বিদ্যালয়ের ঠিকানা:<br>
                </div>
                <div class="row border" style="margin:0px">

                    <div class="col-6 border">
                        <div class="row form-group form-inline">
                            <label class="label-text" for="thana" style="width:120px">উপজেলা/থানা: </label> &nbsp;
                            <input type="text" style="width:250px" class="form-control" name="thana" id="thana">
                        </div>
                        <div class="row form-group form-inline"
                             style="border-top: 1px solid darkgrey; padding-top: 5px;">
                            <label class="label-text" for="village" style="width:120px"> গ্রাম/ওয়ার্ড: </label> &nbsp;
                            <input type="text" style="width:250px" class="form-control" name="village" id="village">
                        </div>
                    </div>
                    <div class="col-6 border">
                        <div class="row form-group form-inline">
                            <label class="label-text" for="union" style="width:150px"> ইউনিয়ন/পৌরসভা: </label> &nbsp;
                            <input type="text" style="width:250px" class="form-control" name="union" id="union">
                        </div>
                        <div class="row form-group form-inline"
                             style="border-top: 1px solid darkgrey; padding-top: 5px;">
                            <label class="label-text" for="cluster" style="width:150px"> ক্লাস্টার: </label> &nbsp;
                            <input type="text" style="width:250px" class="form-control" name="cluster" id="cluster">
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </form>

    <div class="pull-right">
        <a href="second_page">
            <button type="button" class="btn btn-primary btn-lg" style="text-align:right; margin-top:20px">পরবর্তী
                পাতা
            </button>
        </a>
    </div>
</div>

<script src="js/app.js" defer></script>
</body>
</html>
