<?php

require 'C:\xampp\htdocs\student_affair_system\dbCon/dbConfig.php';
$errors = array();
//if user registration 
if (isset($_POST['old_student_register'])) {
    //student
    $course_year = $_POST['course_year'];
    $specialized_subject = $_POST['specialized_subject'];
    $role_number = $_POST['role_number'];
    $university_nrc = $_POST['university_nrc'];
    $student_name = $_POST['student_name'];
    $student_phone_no = $_POST['student_phone_no'];
    $student_nation = $_POST['student_nation'];
    $student_religion = $_POST['student_religion'];
    $student_address = $_POST['student_address'];
    $student_birthday = $_POST['student_birthday'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    //student NRC
    $stateCode = $_POST['stateCode'];
    $townCode = $_POST['townCode'];
    $naing = $_POST['naing'];
    $nrcNumber = $_POST['nrcNumber'];
    //student NRC Full
    $student_nrc = $stateCode . '/' . ' ' . $townCode . ' ' . '(' . $naing . ')' . ' ' . $nrcNumber;

    //father Info
    $father_name = $_POST['father_name'];
    $father_nation = $_POST['father_nation'];
    $father_religion = $_POST['father_religion'];
    $father_address = $_POST['father_address'];
    $father_birthday = $_POST['father_birthday'];
    $father_postion = $_POST['father_postion'];
    $father_department = $_POST['father_department'];
    $father_job_address = $_POST['father_job_address'];
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
    $mother_birthday = $_POST['mother_birthday'];
    $mother_postion = $_POST['mother_postion'];
    $mother_department = $_POST['mother_department'];
    $mother_job_address = $_POST['mother_job_address'];
    //mother NRC
    $mstateCode = $_POST['mstateCode'];
    $mtownCode = $_POST['mtownCode'];
    $mnaing = $_POST['mnaing'];
    $mnrcNumber = $_POST['mnrcNumber'];
    //mother NRC Full
    $mother_nrc = $mstateCode . '/' . ' ' . $mtownCode . ' ' . '(' . $mnaing . ')' . ' ' . $mnrcNumber;

    //BEHS
    $role_number_behs = $_POST['role_number_behs'];
    $pass_year_behs = $_POST['pass_year_behs'];
    $examination_department_behs = $_POST['examination_department_behs'];

    //Support man
    $suppord_name = $_POST['suppord_name'];
    $suppord_relationship = $_POST['suppord_relationship'];
    $suppord_occupation = $_POST['suppord_occupation'];
    $suppord_address = $_POST['suppord_address'];


    if (count($errors) === 0) {
        $data_check = "";
        $student_result = mysqli_query($con, "SELECT * FROM student_information WHERE nrc='$student_nrc'");
        $student_count = mysqli_num_rows($student_result);

        if ($student_count === 1) {
            $data_insert = $con->query("INSERT INTO user_information(course_year,specialized_subject,role_number,university_nrc,student_name,student_phone_no,student_nation,student_religion,student_address,student_birthday,student_mail,gender,student_nrc,father_name,father_nation,father_religion,father_address,father_birthday,father_postion,father_department,father_job_address,father_nrc,mother_name,mother_nation,mother_religion,mother_address,mother_birthday,mother_postion,mother_department,mother_job_address,mother_nrc,role_number_behs,pass_year_behs,examination_department_behs,suppord_name,suppord_relationship,suppord_occupation,suppord_address,user_role) values ($course_year,'$specialized_subject','$role_number','$university_nrc','$student_name','$student_phone_no','$student_nation','$student_religion','$student_address','$student_birthday','$email','$gender','$student_nrc','$father_name','$father_nation','$father_religion','$father_address','$father_birthday','$father_postion','$father_department','$father_job_address','$father_nrc','$mother_name','$mother_nation','$mother_religion','$mother_address','$mother_birthday','$mother_postion','$mother_department','$mother_job_address','$mother_nrc','$role_number_behs','$pass_year_behs','$examination_department_behs','$suppord_name','$suppord_relationship','$suppord_occupation','$suppord_address','student')");
            echo "student";
        } else {
            echo "Your NRC does not exist";
        }
    }
}
