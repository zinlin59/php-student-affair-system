<?php
// Include the database configuration file  
require_once 'C:\xampp\htdocs\student_affair_system\adminDashboard\dbCon/dbConfig.php';

//Select 
$teacher_result = $con->query("SELECT * FROM teacher_information ");


//pagination show data

// Get the total number of records from our table "students".
$total_pages = $con->query('SELECT * FROM user_information')->num_rows;

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Number of results to show on each page.
$num_results_on_page = 10;

//insert student

$email = "";
$name = "";
$nrc = "";
$errors = array();
// get larger enrollement number
$max_ucspl = $con->query("SELECT max(ucspl) FROM student_information ");
$rows = mysqli_fetch_assoc($max_ucspl);
foreach ($rows as $res) {
}
//echo $r;
//first register
if (isset($_POST['add_student'])) {
    $name = $_POST['name'];
    $mark = $_POST['mark'];
    $firstyear = $_POST['firstyear'];
    $secondyear = $firstyear + 1;
    $year = $firstyear . '-' . $secondyear;
    //student NRC
    $stateCode = $_POST['stateCode'];
    $townCode = $_POST['townCode'];
    $naing = $_POST['naing'];
    $nrcNumber = $_POST['nrcNumber'];
    //student NRC Full
    $student_nrc = $stateCode . '/' . ' ' . $townCode . ' ' . '(' . $naing . ')' . ' ' . $nrcNumber;
    //  echo $r_res = $r + 1;
    if (count($errors) === 0) {
        echo "clearerror";
        $data_check = "";
        $student_result = mysqli_query($con, "SELECT * FROM student_information WHERE student_nrc='$student_nrc'");
        $student_count = mysqli_num_rows($student_result);
        if ($student_count === 1) {
            echo "alrady NRC exist";
        } else {
            $data_insert = $con->query("INSERT INTO student_information (student_name,student_nrc,mark,admitted_year) VALUES ('$name','$student_nrc',$mark,'$year')");
            echo "insert successful";
        }
    }
}
//edit admitted student

//get id
if (isset($_GET['stuid'])) {
    $getId = $_GET['stuid'];
    $getdata = mysqli_query($con, "SELECT * FROM student_information WHERE id=$getId");

    if (mysqli_num_rows($getdata) == 1) {
        foreach ($getdata as $getdatas) {
            $getid = $getdatas['id'];
            $getname = $getdatas['student_name'];
            $getnrc = $getdatas['student_nrc'];
            $getmark = $getdatas['mark'];
            $getyear = $getdatas['admitted_year'];
        }
    }
}

// Update Student
if (isset($_POST['update_student'])) {
    $id = $_POST['id'];
    echo $name = $_POST['name'];
    echo $mark = $_POST['mark'];
    echo $year = $_POST['year'];

    $stateCode = $_POST['stateCode'];
    $townCode = $_POST['townCode'];
    $naing = $_POST['naing'];
    $nrcNumber = $_POST['nrcNumber'];

    echo $fullnrc = $stateCode . '/' . ' ' . $townCode . ' ' . '(' . $naing . ')' . ' ' . $nrcNumber;
    $updateStudent = $con->query("UPDATE student_information SET student_name='$name',student_nrc='$fullnrc',mark='$mark',admitted_year='$year' WHERE id=$id ");

    header("location:admitted_students.php");
}
//access 
if (isset($_GET['access_id'])) {
    echo $access_id = $_GET['access_id'];
    $ucspl = $res + 1;
    $update_access = $con->query("UPDATE student_information SET access='access',ucspl='$ucspl' WHERE id=$access_id");
}

if (isset($_GET['graduated_id'])) {
    echo $graduated_id = $_GET['graduated_id'];
    $update_access = $con->query("UPDATE student_information SET role='graduated' WHERE id=$graduated_id");
}
