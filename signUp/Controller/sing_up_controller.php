<?php
require 'C:\xampp\htdocs\student_affair_system\dbCon/dbConfig.php';
$email = "";
$name = "";
$nrc = "";
$errors = array();
//first register
if (isset($_POST['signUp'])) {
    $email = $_POST['email'];
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    if ($password !== $cpassword) {
        $errors['password'] = "Confirm password not matched!";
    }
    //student NRC
    $stateCode = $_POST['stateCode'];
    $townCode = $_POST['townCode'];
    $naing = $_POST['naing'];
    $nrcNumber = $_POST['nrcNumber'];
    //student NRC Full
    $student_nrc = $stateCode . '/' . ' ' . $townCode . ' ' . '(' . $naing . ')' . ' ' . $nrcNumber;

    if (count($errors) === 0) {

        $data_check = "";
        $student_result = mysqli_query($con, "SELECT * FROM student_information WHERE student_nrc='$student_nrc'");
        $student_count = mysqli_num_rows($student_result);

        $teacher_result = mysqli_query($con, "SELECT * FROM teacher_information WHERE teacher_nrc='$student_nrc'");
        $teacher_count = mysqli_num_rows($teacher_result);



        $user_access = $con->query("SELECT * FROM student_information WHERE student_nrc='$student_nrc' AND access='access' ");
        $access_count = mysqli_num_rows($user_access);
        if ($teacher_count === 1) {
            echo "this is ok";
            $teacher_array = mysqli_fetch_assoc($teacher_result);
            $_SESSION['teacher_array'] = $teacher_array;
            header("location: signUp/full_teacher_register.php");

            $data_insert = $con->query("INSERT INTO user_information (student_mail,student_nrc,password) VALUES ('$email','$student_nrc','$password')");
            header("location: signUp/full_teacher_register.php");
        } elseif ($student_count === 1) {
            if ($access_count === 1) {
                $register_array = mysqli_fetch_assoc($student_result);
                $_SESSION['register_array'] = $register_array;
                header("location: new_student_controller.php");


                $data_insert = $con->query("INSERT INTO user_information (student_mail,student_nrc,password) VALUES ('$email','$student_nrc','$password')");
                header("location: signUp/full_student_register.php");
            } else {
                $errors['student_nrc'] = "Your are not enrollment student";
            }
        } else {
            $errors['student_nrc'] = "Your NRC does not exist";
        }
    }
}
