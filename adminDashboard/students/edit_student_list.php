<?php

require_once 'C:\xampp\htdocs\student_affair_system\adminDashboard\dbCon/dbConfig.php';

if (isset($_GET['stuid'])) {
    $getId = $_GET['stuid'];
    $getdata = mysqli_query($con, "SELECT * FROM user_information WHERE id=$getId");

    if (mysqli_num_rows($getdata) == 1) {
        foreach ($getdata as $getdatas) {
            $getid = $getdatas['id'];
            $getname = $getdatas['student_name'];
            $getnrc = $getdatas['student_nrc'];
            $getsphone = $getdatas['student_phone_no'];
            $getsaddress = $getdatas['student_address'];
            $getsnation = $getdatas['student_nation'];
            $getsreligion = $getdatas['student_religion'];
            $getsemail = $getdatas['student_mail'];
            $getsbirthday = $getdatas['student_birthday'];
            $getgender = $getdatas['gender'];
            //father
            $getfname = $getdatas['father_name'];
            $getfnation = $getdatas['father_nation'];
            $getfreligion = $getdatas['father_religion'];
            $getfaddress = $getdatas['father_address'];
            $getfnrc = $getdatas['father_nrc'];
            $getfposition = $getdatas['father_postion'];
            $getfdepartment = $getdatas['father_department'];
            //mother
            $getmname = $getdatas['mother_name'];
            $getmnation = $getdatas['mother_nation'];
            $getmreligion = $getdatas['mother_religion'];
            $getmaddress = $getdatas['mother_address'];
            $getmnrc = $getdatas['mother_nrc'];
            $getmposition = $getdatas['mother_postion'];
            $getmdepartment = $getdatas['mother_department'];
        }
    }
    if (isset($_POST['update_student_list'])) {

        $id = $_POST['id'];
        $student_name = $_POST['student_name'];
        $student_phone_no = $_POST['student_phone_no'];
        $student_address = $_POST['student_address'];
        $student_birthday = $_POST['student_birthday'];
        $student_nation = $_POST['student_nation'];
        $student_religion = $_POST['student_religion'];
        $student_email = $_POST['email'];
        $gender = $_POST['gender'];

        //father Info
        $father_name = $_POST['father_name'];
        $father_nation = $_POST['father_nation'];
        $father_religion = $_POST['father_religion'];
        $father_address = $_POST['father_address'];
        $father_postion = $_POST['father_postion'];
        $father_department = $_POST['father_department'];
        //father NRC
        $fstateCode = $_POST['fstateCode'];
        $ftownCode = $_POST['ftownCode'];
        $fnaing = $_POST['fnaing'];
        $fnrcNumber = $_POST['fnrcNumber'];
        //father NRC Full
        $father_nrc = $fstateCode . '/' . ' ' . $ftownCode . ' ' . '(' . $fnaing . ')' . ' ' . $fnrcNumber;

        //mother info
        $mother_name = $_POST['mother_name'];
        $mother_nation = $_POST['mother_nation'];
        $mother_religion = $_POST['mother_religion'];
        $mother_address = $_POST['mother_address'];
        $mother_postion = $_POST['mother_postion'];
        $mother_department = $_POST['mother_department'];
        //mother NRC
        $mstateCode = $_POST['mstateCode'];
        $mtownCode = $_POST['mtownCode'];
        $mnaing = $_POST['mnaing'];
        $mnrcNumber = $_POST['mnrcNumber'];
        //mother NRC Full
        $mother_nrc = $mstateCode . '/' . ' ' . $mtownCode . ' ' . '(' . $mnaing . ')' . ' ' . $mnrcNumber;

        $user_update = $con->query("UPDATE user_information SET student_name='$student_name',student_phone_no=$student_phone_no,student_nation='$student_nation',student_religion='$student_religion',student_address='$student_address',student_birthday='$student_birthday',gender='$gender',father_name='$father_name',father_nation='$father_nation',father_religion='$father_religion',father_address='$father_address',father_postion='$father_postion',father_department='$father_department',father_nrc='$father_nrc',mother_name='$mother_name',mother_nation='$mother_nation',mother_religion='$mother_religion',mother_address='$mother_address',mother_postion='$mother_postion',mother_department='$mother_department',mother_nrc='$mother_nrc' WHERE id='$id'");

        header("location:students_list.php");
    }
}
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
    <title>edit student </title>

    <!-- Icons font CSS-->
    <link href="registerFormDesign/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="registerFormDesign/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="registerFormDesign/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="registerFormDesign/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- Main CSS-->
    <link href="registerFormDesign/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Update Student Information Form</h2>

                    <form method="POST">
                        <!--Student INfo-->
                        <div class="input-group">
                            <div class="input-group">
                                <input class="input--style-4" type="hidden" name="id" value="<?php echo $getid; ?>">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="student_name" value="<?php echo $getname; ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <input class="input--style-4" type="number" name="student_phone_no" value="<?php echo $getsphone; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-6">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="student_address" value="<?php echo $getsaddress; ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-icon">
                                            <input class="input--style-4 js-datepicker" type="text" name="student_birthday" value="<?php echo $getsbirthday; ?>">
                                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="student_nation" value="<?php echo $getsnation; ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="student_religion" value="<?php echo $getsreligion; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="email" value="<?php echo $getsemail; ?>">
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

                                <div class="row nrc ">
                                    <div class="col-3">
                                        <?php
                                        $strNrc = "$getnrc";
                                        $strArray = explode(' ', $strNrc);
                                        $nrcState = $strArray[0];
                                        $stateCode =  str_replace("/", "",  $nrcState);

                                        $townCode = $strArray[1];

                                        $N = $strArray[2];
                                        $start =  str_replace("(", "",  $N);
                                        $naing =  str_replace(")", "",  $start);


                                        $nrcNumber = $strArray[3];

                                        ?>

                                        <select id="stateCode" name="stateCode" class="form-select" value="">
                                            <option selected><?php echo $stateCode; ?></option>
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

                                    </div>
                                    <div class="col-3">

                                        <select id="townCode" name="townCode" class="form-select">
                                            <option selected><?php echo $townCode; ?></option>
                                        </select>

                                    </div>
                                    <div class="col-3">

                                        <select id="naing" name="naing" class="form-select" placeholder="N">
                                            <option selected><?php echo $naing; ?></option>
                                            <option value="N">N</option>
                                            <option value="P">P</option>
                                            <option value="E">E</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <div class="wrap-input100 validate-input m-b-23">
                                            <input type="text" name="nrcNumber" class="form-control" id="nrcNumber" value="<?php echo $nrcNumber; ?>">
                                        </div>
                                    </div>
                                </div></br>
                            </div><!-- NRC end -->

                        </div>
                        <hr>
                        <!--Father Info-->
                        <div class="input-group">
                            <label class="label">For Father</label>
                            <div class="input-group">
                                <input class="input--style-4" type="text" name="father_name" value="<?php echo $getfname; ?>">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="father_nation" value="<?php echo $getfnation; ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="father_religion" value="<?php echo $getfreligion; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group">
                                <input class="input--style-4" type="text" name="father_address" value="<?php echo $getfaddress; ?>">
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-4" type="text" name="father_postion" value="<?php echo $getfposition; ?>">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <div class="input-group-icon">
                                            <input class="input--style-4" type="text" name="father_department" value="<?php echo $getfdepartment; ?>">


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group ">

                                <div class="row nrc ">
                                    <div class="col-3">
                                        <?php
                                        $strNrc = "$getfnrc";
                                        $strArray = explode(' ', $strNrc);
                                        $nrcState = $strArray[0];
                                        $stateCode =  str_replace("/", "",  $nrcState);

                                        $townCode = $strArray[1];

                                        $N = $strArray[2];
                                        $start =  str_replace("(", "",  $N);
                                        $naing =  str_replace(")", "",  $start);


                                        $nrcNumber = $strArray[3];

                                        ?>

                                        <select id="stateCode" name="fstateCode" class="form-select" value="">
                                            <option selected><?php echo $stateCode; ?></option>
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

                                    </div>
                                    <div class="col-3">

                                        <select id="townCode" name="ftownCode" class="form-select">
                                            <option selected><?php echo $townCode; ?></option>
                                        </select>

                                    </div>
                                    <div class="col-3">

                                        <select id="naing" name="fnaing" class="form-select" placeholder="N">
                                            <option selected><?php echo $naing; ?></option>
                                            <option value="N">N</option>
                                            <option value="P">P</option>
                                            <option value="E">E</option>
                                        </select>
                                    </div>
                                    <div class="col-3">
                                        <div class="wrap-input100 validate-input m-b-23">
                                            <input type="text" name="fnrcNumber" class="form-control" id="nrcNumber" value="<?php echo $nrcNumber; ?>">
                                        </div>
                                    </div>
                                </div></br>
                            </div><!-- NRC end -->
                            <hr></br>
                            <!--Mother Info-->
                            <div class="input-group ">
                                <label class="label">For Mother</label>
                                <div class="input-group">
                                    <input class="input--style-4" type="text" name="mother_name" value="<?php echo $getmname; ?>">
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group">
                                            <input class="input--style-4" type="text" name="mother_nation" value="<?php echo $getmnation; ?>">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group">
                                            <input class="input--style-4" type="text" name="mother_religion" value="<?php echo $getmreligion; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <input class="input--style-4" type="text" name="mother_address" value="<?php echo $getmaddress; ?>">
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <input class="input--style-4" type="text" name="mother_postion" value="<?php echo $getmposition; ?>">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <div class="input-group-icon">
                                                <input class="input--style-4" type="text" name="mother_department" value="<?php echo $getmdepartment; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group ">

                                    <div class="row nrc ">
                                        <div class="col-3">
                                            <?php
                                            $strNrc = "$getmnrc";
                                            $strArray = explode(' ', $strNrc);
                                            $nrcState = $strArray[0];
                                            $stateCode =  str_replace("/", "",  $nrcState);

                                            $townCode = $strArray[1];

                                            $N = $strArray[2];
                                            $start =  str_replace("(", "",  $N);
                                            $naing =  str_replace(")", "",  $start);


                                            $nrcNumber = $strArray[3];

                                            ?>

                                            <select id="stateCode" name="mstateCode" class="form-select" value="">
                                                <option selected><?php echo $stateCode; ?></option>
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

                                        </div>
                                        <div class="col-3">

                                            <select id="townCode" name="mtownCode" class="form-select">
                                                <option selected><?php echo $townCode; ?></option>
                                            </select>

                                        </div>
                                        <div class="col-3">

                                            <select id="naing" name="mnaing" class="form-select" placeholder="N">
                                                <option selected><?php echo $naing; ?></option>
                                                <option value="N">N</option>
                                                <option value="P">P</option>
                                                <option value="E">E</option>
                                            </select>
                                        </div>
                                        <div class="col-3">
                                            <div class="wrap-input100 validate-input m-b-23">
                                                <input type="text" name="mnrcNumber" class="form-control" id="nrcNumber" value="<?php echo $nrcNumber; ?>">
                                            </div>
                                        </div>
                                    </div></br>
                                </div><!-- NRC end -->

                                <div class="row">
                                    <div class="col-2">
                                        <div class="p-t-15">
                                            <button class="btn btn--radius-2 btn--blue" type="submit" onclick="return alert('Update Successful !')" name="update_student_list">Update</button>
                                        </div>
                                    </div>
                                    <div class="col-2" style="margin-top: 20px;">
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