<?php
session_start();
require 'C:\xampp\htdocs\student_affair_system\dbCon/dbConfig.php';
$email = "";
$name = "";
$nrc = "";
$errors = array();
if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $encpass = $password;
    $user_result = $con->query("SELECT * FROM user_information WHERE student_mail='$email' AND password='$password' ");
    $user_count = mysqli_num_rows($user_result);

    if ($user_count === 1) {

        $user_access = $con->query("SELECT * FROM user_information WHERE student_mail='$email' AND password='$password' AND access='access' ");
        $access_count = mysqli_num_rows($user_access);
        if ($access_count === 1) {
            $user_array = mysqli_fetch_assoc($user_result);
            $_SESSION['user_array'] = $user_array;
            header("location: adminDashboard/‌admin/admin_dashboard.php");

            if ($user_array['user_role'] == 'admin') {
                echo  $_SESSION['email'] = $email;
                echo $_SESSION['password'] = $password;
                header("location: adminDashboard/admin/admin_dashboard.php");
            } elseif (($user_array['user_role'] == 'student')) {

                echo $_SESSION['email'] = $email;
                echo $_SESSION['password'] = $password;
                header("location: userInterface/profile.php");
                header("location: userInterface/index.php");
            } elseif (($user_array['user_role'] == 'teacher')) {
                echo $_SESSION['email'] = $email;
                echo $_SESSION['password'] = $password;
                header('location: home.php');
            }
        } else {
            $errors['email'] = "Your are pending student";
        }
    } else {
        $errors['student_nrc'] = "Incorrect Email And Password";
    }
}
