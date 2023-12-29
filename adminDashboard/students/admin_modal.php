<?php
require_once 'C:\xampp\htdocs\student_affair_system\adminDashboard\dbCon/dbConfig.php';

//access panding student;
if (isset($_POST['modalSave'])) {
    $nrc = $_POST['stu_nrc'];
    header('location: addStudent.php');
    $update_modal = $con->query("UPDATE user_information SET status='access' WHERE student_nrc='$nrc'");
}
