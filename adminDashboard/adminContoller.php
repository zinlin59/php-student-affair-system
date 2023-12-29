<?php
// Include the database configuration file  
require_once 'C:\xampp\htdocs\student_affair_system\adminDashboard\dbCon/dbConfig.php';

//Select 
$student_result = $con->query("SELECT id,student_name,specialized_subject,gender,student_nrc,access FROM user_information WHERE access='pending'");

$result = $con->query("SELECT * FROM user_information");
//Count Student
$count_stu = $con->query("SELECT id FROM student_information ");
$count_student = mysqli_num_rows($count_stu);

//count student
$count_stu = $con->query("SELECT id FROM student_information WHERE role='student' ");
$count_student = mysqli_num_rows($count_stu);


//count graduated student
$count_graduated = $con->query("SELECT id FROM student_information WHERE role='graduated' ");
$count_graduated_student = mysqli_num_rows($count_graduated);


$dateOfBirth = '15-03-2007';

// Create a datetime object using date of birth
$dob = new DateTime($dateOfBirth);

// Get current date
$now = new DateTime();

// Calculate the time difference between the two dates
$diff = $now->diff($dob);

// Get the age in years, months and days
$calculate_year = $diff->y;


//count Padding  student
$count_pending = $con->query("SELECT * FROM student_information WHERE access='pending' ");
$count_pending_stu = mysqli_num_rows($count_pending);
