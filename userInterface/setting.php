<?php
session_start();
if (!isset($_SESSION['user_array'])) {
    header("location: /student_affair_system/index.php");
}
require_once 'C:\xampp\htdocs\student_affair_system\adminDashboard\dbCon/dbConfig.php';

$password = "";
$success = "";
$errors = array();

if (isset($_POST['change_password'])) {

    //get value
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['password2']);
    if ($password !== $cpassword) {
        $errors['password'] = "Confirm password not matched!";
    } else {
        echo $old_password = $_POST['old_password'];
        echo $id = $_SESSION['user_array']['id'];

        $resul = $con->query("SELECT password FROM user_information WHERE id=$id ");
        if (!$resul) {
            echo 'Could not run query: ';
            exit;
        }
        $row = mysqli_fetch_row($resul);

        echo $pass = $row[0]; // 42
        if ($pass == $old_password) {
            echo "pass is same";
        }

        $encpass = $password;
        $update_pass = "UPDATE user_information SET password = '$encpass' WHERE id = '$id'";
        $run_query = mysqli_query($con, $update_pass);
        if ($run_query) {
            $info = "Your password changed. Now you can login with your new password.";

            $errors['success'] = "Password Change Complate";
        } else {
            $errors['db-error'] = "Failed to change your password!";
        }

        //getting this email using session 
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

                <!-- SETTINGS TAB CONTENT -->
                <div class="tab-pane settings" id="settings-tab">
                    <?php
                    if (count($errors) > 0) {
                    ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach ($errors as $showerror) {
                                echo $showerror;
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>

                    <form class="form-horizontal" role="form" method="POST">
                        <fieldset>
                            <h3><i class="fa fa-square"></i> Change Password</h3>
                            <div class="form-group">
                                <label for="old-password" class="col-sm-3 control-label">Old Password</label>
                                <div class="col-sm-4">
                                    <input type="password" id="old-password" name="old_password" class="form-control">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="password" class="col-sm-3 control-label">New Password</label>
                                <div class="col-sm-4">
                                    <input type="password" id="password" name="password" class="form-control" value="<?php echo $password ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password2" class="col-sm-3 control-label">Repeat Password</label>
                                <div class="col-sm-4">
                                    <input type="password" id="password2" name="password2" class="form-control" value="<?php echo $password ?>">
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>

                        </fieldset>
                        <fieldset>

                        </fieldset>

                        <p class="text-center"> <button type="submit" class="btn btn-primary" name="change_password"><i class="fa fa-floppy-o"></i>Save Changes</button>
                            </a></p>
                    </form>
                </div>
                <!-- END SETTINGS TAB CONTENT -->
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