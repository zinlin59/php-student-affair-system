<?php
require 'C:\xampp\htdocs\student_affair_system\dbCon/dbConfig.php';
$email = "";
$name = "";
$nrc = "";
$errors = array();

//if user registration 
if (isset($_POST['new_student_register'])) {
    //student

    $student_name = $_POST['student_name'];
    $student_phone_no = $_POST['student_phone_no'];
    $student_nation = $_POST['student_nation'];
    $student_religion = $_POST['student_religion'];
    $student_address = $_POST['student_address'];
    $student_birthday = $_POST['student_birthday'];
    $gender = $_POST['gender'];

    //father Info
    $father_name = $_POST['father_name'];
    $father_nation = $_POST['father_nation'];
    $father_religion = $_POST['father_religion'];
    $father_address = $_POST['father_address'];
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

    $stu_nrc = $_POST['stu_nrc'];

    $user_update = $con->query("UPDATE user_information SET student_name='$student_name',student_phone_no=$student_phone_no,student_nation='$student_nation',student_religion='$student_religion',student_address='$student_address',student_birthday='$student_birthday',gender='$gender',father_name='$father_name',father_nation='$father_nation',father_religion='$father_religion',father_address='$father_address',father_postion='$father_postion',father_department='$father_department',father_job_address='$father_job_address',father_nrc='$father_nrc',mother_name='$mother_name',mother_nation='$mother_nation',mother_religion='$mother_religion',mother_address='$mother_address',mother_postion='$mother_postion',mother_department='$mother_department',mother_job_address='$mother_job_address',mother_nrc='$mother_nrc',role_number_behs='$role_number_behs',pass_year_behs='$pass_year_behs',examination_department_behs='$examination_department_behs',suppord_name='$suppord_name',suppord_relationship='$suppord_relationship',suppord_occupation='$suppord_occupation',suppord_address='$suppord_address',user_role='student',access='pending' WHERE student_nrc='$stu_nrc'");

    /* $updateStudent = $con->query("UPDATE student_information SET /*course_year=$course_year,specialized_subject='$specialized_subject',role_number='$role_number',university_nrc='$university_nrc',student_name='$student_name',student_phone_no=$student_phone_no,student_nation='$student_nation',student_religion='$student_religion',student_address='$student_address',student_birthday='$student_birthday',gender='$gender',father_name='$father_name',father_nation='$father_nation',father_religion='$father_religion',father_address='$father_address',father_birthday='$father_birthday',father_postion='$father_postion',father_department='$father_department',father_job_address='$father_job_address',father_nrc='$father_nrc',mother_name='$mother_name',mother_nation='$mother_nation',mother_religion='$mother_religion',mother_address='$mother_address',mother_birthday='$mother_birthday',mother_postion='$mother_postion',mother_department='$mother_department',mother_job_address='$mother_job_address',mother_nrc='$mother_nrc',role_number_behs='$role_number_behs',pass_year_behs='$pass_year_behs',examination_department_behs='$examination_department_behs',suppord_name='$suppord_name',suppord_relationship='$suppord_relationship',suppord_occupation='$suppord_occupation',suppord_address='$suppord_address',user_role='student'  WHERE student_nrc = '$student_nrc' "); */

    /*values ($course_year,'$specialized_subject','$role_number','$university_nrc','$student_name','$student_phone_no','$student_nation','$student_religion','$student_address','$student_birthday','$email','$gender','$student_nrc','$father_name','$father_nation','$father_religion','$father_address','$father_birthday','$father_postion','$father_department','$father_job_address','$father_nrc','$mother_name','$mother_nation','$mother_religion','$mother_address','$mother_birthday','$mother_postion','$mother_department','$mother_job_address','$mother_nrc','$role_number_behs','$pass_year_behs','$examination_department_behs','$suppord_name','$suppord_relationship','$suppord_occupation','$suppord_address','student')"); */
    echo "student";
}

//Select 
