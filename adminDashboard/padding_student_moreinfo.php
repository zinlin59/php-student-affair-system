<?php
// Include the database configuration file  
require_once 'C:\xampp\htdocs\student_affair_system\adminDashboard\dbCon/dbConfig.php';

//get id
if (isset($_GET['more_stuid'])) {
    $getId = $_GET['more_stuid'];
    $getdata = mysqli_query($con, "SELECT * FROM user_information WHERE id=$getId");

    if (mysqli_num_rows($getdata) == 1) {
        foreach ($getdata as $getdatas) {
            $getid = $getdatas['id'];
            $getname = $getdatas['student_name'];
            $getphone = $getdatas['student_phone_no'];
            $getnrc = $getdatas['student_nrc'];
            $getnation = $getdatas['student_nation'];
            $getreligion = $getdatas['student_religion'];
            $getaddress = $getdatas['student_address'];
            $getbirthday = $getdatas['student_birthday'];
            $getmail = $getdatas['student_mail'];
            $getgender = $getdatas['gender'];

            $getfname = $getdatas['father_name'];
            $getfnation = $getdatas['father_nation'];
            $getfreligion = $getdatas['father_religion'];
            $getfnrc = $getdatas['father_nrc'];
            $getfaddress = $getdatas['father_address'];
            $getfpostion = $getdatas['father_postion'];
            $getfdepartment = $getdatas['father_department'];

            $getmname = $getdatas['mother_name'];
            $getmnation = $getdatas['mother_nation'];
            $getmreligion = $getdatas['mother_religion'];
            $getmnrc = $getdatas['mother_nrc'];
            $getmaddress = $getdatas['mother_address'];
            $getmpostion = $getdatas['mother_postion'];
            $getmdepartment = $getdatas['mother_department'];


            $getenroll = $con->query("SELECT student_information.ucspl FROM student_information INNER JOIN user_information ON student_information.student_nrc=user_information.student_nrc WHERE student_information.student_nrc='$getnrc'");
        }
    }
}

if (isset($_POST['btn_access'])) {
    $update_access = $con->query("UPDATE user_information SET access='access' WHERE id=$getid");
    header("location:admin/admin_dashboard.php");
}
if (isset($_REQUEST['cancle_user'])) {

    $cancle_user = $_REQUEST['cancle_user'];
    $delete_user = $con->query("DELETE FROM user_information WHERE id=$cancle_user");
    if ($delete_user) {
        echo "<script>alert('user do not accept succfully')</script>";
        header("location:admin/admin_dashboard.php");
    } else {
        die('Error:' . mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>gray profile - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="main-content">

                <div class="tab-content profile-page">
                    <!-- PROFILE TAB CONTENT -->
                    <div class="tab-pane profile active" id="profile-tab">
                        <div class="row">

                            <div class="col-md-4">


                                <h3><i class="fa fa-square"></i> Student Information</h3>
                                <p class="data-row">
                                    <span class="data-name">Username</span>
                                    <span class="data-value"><?php echo $getname ?></span>
                                </p>
                                <p class="data-row">
                                    <span class="data-name">Enroll Number</span>
                                    <span class="data-value">
                                        <?php

                                        foreach ($getenroll as $stu_res) {
                                            echo 'UCSPL-' . $stu_res['ucspl'];
                                        }
                                        ?></span>
                                </p>

                                <p class="data-row">
                                    <span class="data-name">Phone No</span>
                                    <span class="data-value"><?php echo $getphone ?></span>
                                </p>
                                <p class="data-row">
                                    <span class="data-name">NRC</span>
                                    <span class="data-value"><?php echo $getnrc ?></span>
                                </p>
                                <p class="data-row">
                                    <span class="data-name">Nation</span>
                                    <span class="data-value"><?php echo $getnation ?></span>
                                </p>
                                <p class="data-row">
                                    <span class="data-name">Religion</span>
                                    <span class="data-value"><?php echo $getreligion ?></span>
                                </p>
                                <p class="data-row">
                                    <span class="data-name">Address</span>
                                    <span class="data-value"><?php echo $getaddress ?></span>
                                </p>
                                <p class="data-row">
                                    <span class="data-name">Email</span>
                                    <span class="data-value"><?php echo $getmail ?></span>
                                </p>
                                <p class="data-row">
                                    <span class="data-name">Gender</span>
                                    <span class="data-value"><?php echo $getgender ?></span>
                                </p>


                            </div>

                            <div class="col-md-4">

                                <h3><i class="fa fa-square"></i> Father Information</h3>
                                <p class="data-row">
                                    <span class="data-name">Name</span>
                                    <span class="data-value"><?php echo $getfname ?></span>
                                </p>
                                <p class="data-row">
                                    <span class="data-name">Nation</span>
                                    <span class="data-value"><?php echo $getfnation ?></span>
                                </p>
                                <p class="data-row">
                                    <span class="data-name">Religion</span>
                                    <span class="data-value"><?php echo $getfreligion ?></span>
                                </p>
                                <p class="data-row">
                                    <span class="data-name">NRC</span>
                                    <span class="data-value"><?php echo $getfnrc ?></span>
                                </p>
                                <p class="data-row">
                                    <span class="data-name">Address</span>
                                    <span class="data-value"><?php echo $getfaddress ?></span>
                                </p>
                                <p class="data-row">
                                    <span class="data-name">Postion</span>
                                    <span class="data-value"><?php echo $getfpostion ?></span>
                                </p>
                                <p class="data-row">
                                    <span class="data-name">Department</span>
                                    <span class="data-value"><?php echo $getfdepartment ?></span>
                                </p>

                            </div>
                            <div class="col-md-4">

                                <h3><i class="fa fa-square"></i> Mother Information</h3>
                                <p class="data-row">
                                    <span class="data-name">Name</span>
                                    <span class="data-value"><?php echo $getmname ?></span>
                                </p>
                                <p class="data-row">
                                    <span class="data-name">Nation</span>
                                    <span class="data-value"><?php echo $getmnation ?></span>
                                </p>
                                <p class="data-row">
                                    <span class="data-name">Religion</span>
                                    <span class="data-value"><?php echo $getmreligion ?></span>
                                </p>
                                <p class="data-row">
                                    <span class="data-name">NRC</span>
                                    <span class="data-value"><?php echo $getmnrc ?></span>
                                </p>
                                <p class="data-row">
                                    <span class="data-name">Address</span>
                                    <span class="data-value"><?php echo $getmaddress ?></span>
                                </p>
                                <p class="data-row">
                                    <span class="data-name">Postion</span>
                                    <span class="data-value"><?php echo $getmpostion ?></span>
                                </p>
                                <p class="data-row">
                                    <span class="data-name">Department</span>
                                    <span class="data-value"><?php echo $getmdepartment ?></span>
                                </p>

                            </div>
                        </div><br><br>
                        <form action="" method="post">
                            <div class="row">
                                <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you will accept this student ?')" name="btn_access"><i class="fa fa-floppy-o"></i>Save Changes</button>
                                </a>
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                                    <a href="padding_student_moreinfo.php? cancle_user=<?php echo $getid; ?>" onclick="return confirm('Are you sure you do not accept this student ?')" class="btn btn-danger">Cancle
                                    </a>
                                </form>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- END PROFILE TAB CONTENT -->

                <!-- SETTINGS TAB CONTENT -->

            </div>
        </div>



    </div>
    </div>


    <style type="text/css">
        body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 13px;
            color: #555;
            background: #ececec;
            margin-top: 20px;
        }

        .nav.nav-tabs-custom-colored>li.active>a,
        .nav.nav-tabs-custom-colored>li.active>a:hover,
        .nav.nav-tabs-custom-colored>li.active>a:focus {
            background-color: #296EAA;
            color: #fff;
            cursor: pointer;
        }

        .tab-content.profile-page {
            padding: 35px 15px;
        }

        .profile .user-info-left {
            text-align: center;
        }

        .profile .user-info-left,
        .profile .user-info-right {
            padding: 10px 0;
        }

        .profile .user-info-left img {
            border: 3px solid #fff;
        }

        .profile .user-info-left h2 {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 1.3em;
            margin-bottom: 20px;
        }

        .user-info-left .btn {
            border-radius: 0px;
        }

        .profile .user-info-left ul.social a {
            font-size: 20px;
            color: #b9b9b9;
        }

        .profile .user-info-right {
            border-left: 1px solid #ddd;
            padding-left: 30px;
        }

        .profile h3,
        .activity h3,
        .settings h3 {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 1.2em;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .data-row .data-name,
        .data-row .data-value {
            display: inline-block;
            vertical-align: middle;
            padding: 5px;
        }

        .data-row .data-name {
            width: 12em;
            color: #fff;
            background-color: #5cb85c;
            border-color: #4cae4c;
            font-size: 0.9em;
            vertical-align: top;
        }

        ul.activity-list>li:not(:last-child) {
            border-bottom: 1px solid #ddd;
        }

        ul.activity-list>li {
            padding: 15px;
        }

        ul.activity-list>li .activity-icon {
            display: inline-block;
            vertical-align: middle;
            -moz-border-radius: 30px;
            -webkit-border-radius: 30px;
            border-radius: 30px;
            width: 34px;
            height: 34px;
            background-color: #e4e4e4;
            font-size: 16px;
            color: #656565;
            line-height: 34px;
            text-align: center;
            margin-right: 10px;
        }

        fieldset {
            margin-bottom: 40px;
        }

        hr {
            border-top-color: #ddd;
        }

        .form-horizontal .control-label {
            text-align: left;
        }

        .form-control,
        .input-group .form-control {
            -moz-border-radius: 0;
            -webkit-border-radius: 0;
            border-radius: 0;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
    </style>

    <script type="text/javascript">

    </script>
</body>

</html>