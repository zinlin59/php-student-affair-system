<?php
session_start();
//include
//name space
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\student_affair_system\dbCon/dbConfig.php';
$email = "";
$name = "";
$nrc = "";
$errors = array();

//if user signup button
if (isset($_POST['signup'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $stateCode = $_POST['stateCode'];
    $townCode = $_POST['townCode'];
    $naing = $_POST['naing'];
    $nrcNumber = $_POST['nrcNumber'];
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    $fullnrc = $stateCode . "$townCode" . "$naing" . $nrcNumber;
    if ($password !== $cpassword) {
        $errors['password'] = "Confirm password not matched!";
    }
    $email_check = "SELECT * FROM user_info WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if (mysqli_num_rows($res) > 0) {
        $errors['email'] = "Email that you have entered is already exist!";
    }
    if (count($errors) === 0) {
        $encpass = $password;
        $code = rand(999999, 111111);
        $status = "notverified";

        $data_check = "";
        $teacher_result = mysqli_query($con, "SELECT * FROM teacher_info WHERE nrc='$fullnrc'");
        $teacher_count = mysqli_num_rows($teacher_result);
        $student_result = mysqli_query($con, "SELECT * FROM student_info WHERE nrc='$fullnrc'");
        $student_count = mysqli_num_rows($student_result);
        $staff_result = mysqli_query($con, "SELECT * FROM staff_info WHERE nrc='$fullnrc'");
        $staff_count = mysqli_num_rows($staff_result);
        if ($teacher_count === 1) {
            $data_check = $con->query("INSERT INTO user_info(name,email,nrc,password,code,status,role) values ('$name','$email','$fullnrc','$encpass', '$code', '$status','teacher')");
            echo "teacher";
        } elseif ($student_count === 1) {
            $data_check = $con->query("INSERT INTO user_info(name,email,nrc,password,code,status,role) values ('$name','$email','$fullnrc','$encpass', '$code', '$status','student')");
            echo "student";
        } elseif ($staff_count === 1) {
            $data_check = $con->query("INSERT INTO user_info(name,email,nrc,password,code,status,role) values ('$name','$email','$fullnrc','$encpass', '$code', '$status','staff')");
            echo "student";
        } else {
            $errors['nrc'] = "NRC that you have is not exist!";
        }
    }
}
//if user click verification code submit button
if (isset($_POST['check'])) {
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
    $check_code = "SELECT * FROM user_info WHERE code = $otp_code";
    $code_res = mysqli_query($con, $check_code);
    if (mysqli_num_rows($code_res) > 0) {
        $fetch_data = mysqli_fetch_assoc($code_res);
        $fetch_code = $fetch_data['code'];
        $email = $fetch_data['email'];
        $code = 0;
        $status = 'verified';
        $update_otp = "UPDATE user_info SET code = $code, status = '$status' WHERE code = $fetch_code";
        $update_res = mysqli_query($con, $update_otp);
        if ($update_res) {
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            header('location:login-user.php');
            exit();
        } else {
            $errors['otp-error'] = "Failed while updating code!";
        }
    } else {
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}

//if user click login button

if (isset($_POST['login'])) {
    echo  $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $encpass = $password;
    $user_result = mysqli_query($con, "SELECT * FROM user_info WHERE email='$email' AND password='$encpass'");
    $user_count = mysqli_num_rows($user_result);

    if ($user_count === 1) {
        $user_array = mysqli_fetch_assoc($user_result);
        $_SESSION['user_array'] = $user_array;

        if ($user_array['status'] == "verified") {

            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            if ($user_array['role'] == 'admin') {
                echo  $_SESSION['email'] = $email;
                echo $_SESSION['password'] = $password;
                header("location:adminDashboard/index.php");
            } elseif (($user_array['role'] == 'student')) {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: home.php');
            } elseif (($user_array['role'] == 'teacher')) {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: home.php');
            } elseif (($user_array['role'] == 'staff')) {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: home.php');
            }
        }
    } else {
        $errors['email'] = "Incorrect email or password!";
    }
}
/*if (isset($_POST['login'])) {
    echo "one";
    $email =  $_POST['email'];
    $password =  $_POST['password'];
    $check_email = "SELECT * FROM user_info WHERE email = '$email'";
    $res = mysqli_query($con, $check_email);
    if (mysqli_num_rows($res) > 0) {
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['password'];
        if (password_verify($password, $fetch_pass)) {
            $_SESSION['email'] = $email;
            $status = $fetch['status'];
            if ($status == 'verified') {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: home.php');
            } else {
                $info = "It's look like you haven't still verify your email - $email";
                $_SESSION['info'] = $info;
                header('location: user-otp.php');
            }
        } else {
            $errors['email'] = "Incorrect email or password!";
        }
    } else {
        $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
    }
}*/
//if user click continue button in forgot password form

//if user click check reset otp button
if (isset($_POST['check-reset-otp'])) {
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
    $check_code = "SELECT * FROM user_info WHERE code = $otp_code";
    $code_res = mysqli_query($con, $check_code);
    if (mysqli_num_rows($code_res) > 0) {
        $fetch_data = mysqli_fetch_assoc($code_res);
        $email = $fetch_data['email'];
        $_SESSION['email'] = $email;
        $info = "Please create a new password that you don't use on any other site.";
        $_SESSION['info'] = $info;
        header('location: new-password.php');
        exit();
    } else {
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}

//if user click change password button
if (isset($_POST['change-password'])) {
    $_SESSION['info'] = "";
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if ($password !== $cpassword) {
        $errors['password'] = "Confirm password not matched!";
    } else {
        $code = 0;
        $email = $_SESSION['email']; //getting this email using session
        $encpass = $password;
        $update_pass = "UPDATE user_info SET code = $code, password = '$encpass' WHERE email = '$email'";
        $run_query = mysqli_query($con, $update_pass);
        if ($run_query) {
            $info = "Your password changed. Now you can login with your new password.";
            $_SESSION['info'] = $info;
            header('Location: password-changed.php');
        } else {
            $errors['db-error'] = "Failed to change your password!";
        }
    }
}
//if login now button click
if (isset($_POST['login-now'])) {
    header('Location: login-user.php');
}
