<?php
include_once "Controller/old_student_controller.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <script type="text/javascript" src="registerFormDesign/js/nrc.js"></script>
    <!-- Title Page-->
    <title>Register Forms </title>

    <!-- Icons font CSS-->
    <link href="registerFormDesign/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="registerFormDesign/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="registerFormDesign/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="registerFormDesign/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="registerFormDesign/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Old Student Registration Form</h2>
                    <form method="POST">
                        <!--Student INfo-->
                        <div class="input-group">
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="course_year" placeholder="Course Year">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="specialized_subject" placeholder="Specialized subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="role_number" placeholder="Role Number">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="university_nrc" placeholder="University NRC Number">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="student_name" placeholder="Student Name">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-4" type="number" name="student_phone_no" placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>


                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="student_nation" placeholder="Nation">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="student_religion" placeholder="Religion">
                                    </div>
                                </div>
                            </div>

                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="student_address" placeholder="Address City / State ">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <div class="input-group-icon">
                                            <input class="input--style-4 js-datepicker" type="text" name="student_birthday" placeholder="Date Of Birth">
                                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <div class="p-t-10">
                                            <label class="radio-container m-r-45">Male
                                                <input type="radio" checked="checked" name="gender" value="male">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">Female
                                                <input type="radio" name="gender" value="female">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Student NRC-->
                            <div class="input-group ">

                                <div class="row row-space">

                                    <div class="col-3">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select id="stateCode" name="stateCode">
                                                <option selected disabled>NRC</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="rs-select2 js-select-simple select--no-search">

                                            <select id="townCode" name="townCode" class="form-select" value="<?php echo $name ?>">
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select id="naing" name="naing">
                                                <option value="N">N</option>
                                                <option value="P">P</option>
                                                <option value="E">E</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-group">
                                            <input name="nrcNumber" id="nrcNumber" placeholder="123456" class="input--style-4" type="number" style="width: 160px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!--Father Info-->
                        <div class="input-group">
                            <label class="label">For Father</label>
                            <div class="input-group">
                                <input class="input--style-4" type="text" name="father_name" placeholder="Name">
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="father_nation" placeholder="Nation">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="father_religion" placeholder="Religion">
                                    </div>
                                </div>
                            </div>

                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="father_address" placeholder="Address City / State ">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <div class="input-group-icon">
                                            <input class="input--style-4 js-datepicker" type="text" name="father_birthday" placeholder="Date Of Birth">
                                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group">
                                <label class="label">Father / Guardian's occupation</label>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-icon">
                                            <input class="input--style-4" type="text" name="father_postion" placeholder="Postion">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-icon">
                                            <input class="input--style-4" type="text" name="father_department" placeholder="Department / Business">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <input class="input--style-4" type="text" name="father_job_address" placeholder="Job Address City / State">
                            </div></br>
                            <!--Father NRC-->
                            <div class="input-group ">
                                <div class="row row-space">

                                    <div class="col-3">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select id="fstateCode" name="fstateCode">
                                                <option selected disabled>NRC</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="rs-select2 js-select-simple select--no-search">

                                            <select id="ftownCode" name="ftownCode" class="form-select" value="<?php echo $name ?>">
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select id="fnaing" name="fnaing">
                                                <option value="N">N</option>
                                                <option value="P">P</option>
                                                <option value="E">E</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-group">
                                            <input name="fnrcNumber" id="fnrcNumber" placeholder="123456" class="input--style-4" type="number" style="width: 160px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr></br>
                        <!--Mother Info-->
                        <div class="input-group ">
                            <label class="label">For Mother</label>
                            <div class="input-group">
                                <input class="input--style-4" type="text" name="mother_name" placeholder="Name">
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="mother_nation" placeholder="Nation">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="mother_religion" placeholder="Religion">
                                    </div>
                                </div>
                            </div>

                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="mother_address" placeholder="Address City / State ">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <div class="input-group-icon">
                                            <input class="input--style-4 js-datepicker" type="text" name="mother_birthday" placeholder="Date Of Birth">
                                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group">
                                <label class="label">Mother / Guardian's occupation</label>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-icon">
                                            <input class="input--style-4" type="text" name="mother_postion" placeholder="Postion">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-icon">
                                            <input class="input--style-4" type="text" name="mother_department" placeholder="Department / Business">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <input class="input--style-4" type="text" name="mother_job_address" placeholder="Job Address City / State">
                            </div></br>
                            <!--Mother NRC-->
                            <div class="row row-space">

                                <div class="col-3">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select id="mstateCode" name="mstateCode">
                                            <option selected disabled>NRC</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="rs-select2 js-select-simple select--no-search">

                                        <select id="mtownCode" name="mtownCode" class="form-select" value="<?php echo $name ?>">
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select id="mnaing" name="mnaing">
                                            <option value="N">N</option>
                                            <option value="P">P</option>
                                            <option value="E">E</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="input-group">
                                        <input name="mnrcNumber" id="mnrcNumber" placeholder="123456" class="input--style-4" type="number" style="width: 160px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!--BEHS-->
                        <div class="input-group ">
                            <label class="label">BEHS</label>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group ">
                                        <input class="input--style-4" type="text" name="role_number_behs" placeholder="Role Number (BEHS)">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group ">
                                        <input class="input--style-4" type="text" name="pass_year_behs" placeholder="Pass Year">
                                    </div>
                                </div>
                            </div>

                            <div class="input-group ">
                                <input class="input--style-4" type="text" name="examination_department_behs" placeholder="Examination Department">
                            </div>
                        </div>
                        <hr></br>
                        <!--Suppord Who-->

                        <div class="input-group">
                            <label class="label">Someone who will support you while attending school</label>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="suppord_name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="suppord_relationship" placeholder="Relationship">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="suppord_occupation" placeholder="Occupation">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="suppord_address" placeholder="Address">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr></br>
                        <!--Previous academic year-->
                        <div class="input-group ">
                            <div class="row row-space">
                                <div class="col-3">
                                    <div class="input-group">
                                        <input name="mnrcNumber" id="mnrcNumber" placeholder="" class="input--style-4" type="number" style="width: 100px;">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="input-group">
                                        <input name="mnrcNumber" placeholder="" class="input--style-4" type="number" style="width: 100px;">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="input-group">
                                        <input name="mnrcNumber" placeholder="" class="input--style-4" type="number" style="width: 100px;">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="input-group">
                                        <input name="mnrcNumber" placeholder="" class="input--style-4" type="number" style="width: 100px;">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="input-group">
                                        <input name="mnrcNumber" placeholder="" class="input--style-4" type="number" style="width: 100px;">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <div class="p-t-15">
                                    <button class="btn btn--radius-2 btn--blue" type="submit" name="old_student_register">Register</button>
                                </div>
                            </div>
                            <div class="col-2" style="margin-top: 20px;">
                                <label>Already a member? <a href="/student_affair_system">Login here</a> </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="registerFormDesign/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="registerFormDesign/vendor/select2/select2.min.js"></script>
    <script src="registerFormDesign/vendor/datepicker/moment.min.js"></script>
    <script src="registerFormDesign/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="registerFormDesign/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
<script>
    document.getElementById('stateCode').onchange = function() {
        var scode = this.value;
        var selectedNRC = nrcData.filter(function(nrc) {
            if (nrc.state_id != scode) {
                return false; // skip
            }
            return true;
        }).map(function(nrc) {
            return nrc.township_en;
        });
        //console.log(selectedNRC);
        //console.log(selectedNRC[1]);

        //var temp = document.getElementById('townCode');

        //console.log(temp.options.length);

        selectedNRC.sort();

        var township = document.getElementById('townCode');

        while (township.options.length > 0) {
            township.remove(0);
        }

        for (var i = 0; i < selectedNRC.length; i++) {
            var opt = document.createElement('option');
            opt.value = selectedNRC[i];
            opt.innerHTML = selectedNRC[i];
            township.appendChild(opt);
        }
    };

    function showPreview(event) {
        if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("file-ip-1-preview");
            preview.src = src;
            preview.style.display = "block";
        }
    }

    //Father nrc
    document.getElementById('fstateCode').onchange = function() {
        var scode = this.value;
        var selectedNRC = nrcData.filter(function(nrc) {
            if (nrc.state_id != scode) {
                return false; // skip
            }
            return true;
        }).map(function(nrc) {
            return nrc.township_en;
        });

        selectedNRC.sort();

        var township = document.getElementById('ftownCode');

        while (township.options.length > 0) {
            township.remove(0);
        }

        for (var i = 0; i < selectedNRC.length; i++) {
            var opt = document.createElement('option');
            opt.value = selectedNRC[i];
            opt.innerHTML = selectedNRC[i];
            township.appendChild(opt);
        }
    };

    function showPreview(event) {
        if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("file-ip-1-preview");
            preview.src = src;
            preview.style.display = "block";
        }
    }
    //moter nrc
    document.getElementById('mstateCode').onchange = function() {
        var scode = this.value;
        var selectedNRC = nrcData.filter(function(nrc) {
            if (nrc.state_id != scode) {
                return false; // skip
            }
            return true;
        }).map(function(nrc) {
            return nrc.township_en;
        });

        selectedNRC.sort();

        var township = document.getElementById('mtownCode');

        while (township.options.length > 0) {
            township.remove(0);
        }

        for (var i = 0; i < selectedNRC.length; i++) {
            var opt = document.createElement('option');
            opt.value = selectedNRC[i];
            opt.innerHTML = selectedNRC[i];
            township.appendChild(opt);
        }
    };

    function showPreview(event) {
        if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("file-ip-1-preview");
            preview.src = src;
            preview.style.display = "block";
        }
    }
</script>

</html>
<!-- end document-->