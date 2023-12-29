<?php
// Include the database configuration file  
require_once 'C:\xampp\htdocs\student_affair_system\adminDashboard\dbCon/dbConfig.php';
// If file uploadform is submitted 
$status = $statusMsg = '';
if (isset($_POST["imageUpload"])) {
    $status = 'error';
    echo $img_size = $_FILES['image']['size'];
    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $phone = $_POST['phone'];

    $stateCode = $_POST['stateCode'];
    $townCode = $_POST['townCode'];
    $naing = $_POST['naing'];
    $nrcNumber = $_POST['nrcNumber'];

    $fullnrc = $stateCode . '/' . ' ' . $townCode . ' ' . '(' . $naing . ')' . ' ' . $nrcNumber;

    if (!empty($_FILES["image"]["name"])) {
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        // Allow certain file formats 
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
        if (in_array($fileType, $allowTypes)) {
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));

            // Insert image content into database 
            $insert = $con->query("INSERT INTO student_info (name,nrc,email,phone,image) VALUES ('$name','$fullnrc','$email','$phone','$imgContent')");

            if ($insert) {
                $status = 'success';
                $statusMsg = "File uploaded successfully.";
            } else {
                $statusMsg = "File upload failed, please try again.";
            }
        } else {
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
        }
    } else {
        $statusMsg = 'Please select an image file to upload.';
    }
}
// Retrice data form database
//$result = $con->query("SELECT * FROM student_info");

// Edit 
//get id
if (isset($_GET['stuid'])) {
    $getId = $_GET['stuid'];
    $getdata = mysqli_query($con, "SELECT * FROM user_information WHERE id=$getId");

    if (mysqli_num_rows($getdata) == 1) {
        foreach ($getdata as $getdatas) {
            $getid = $getdatas['id'];
            $getname = $getdatas['name'];
            $getnrc = $getdatas['nrc'];
            $getemail = $getdatas['email'];
            $getphone = $getdatas['phone'];
        }
    }
}
// Update Student
if (isset($_POST['updateStudent'])) {
    $id = $_POST['id'];
    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $phone = $_POST['phone'];

    $stateCode = $_POST['stateCode'];
    $townCode = $_POST['townCode'];
    $naing = $_POST['naing'];
    $nrcNumber = $_POST['nrcNumber'];

    echo $fullnrc = $stateCode . '/' . ' ' . $townCode . ' ' . '(' . $naing . ')' . ' ' . $nrcNumber;
    $updateStudent = $con->query("UPDATE student_info SET name='$name',nrc='$fullnrc',email='$email',phone=$phone WHERE id=$id ");
}

if (isset($_REQUEST['delete_user'])) {
    echo "hello";
    $delete_user = $_REQUEST['delete_user'];
    $delete_user = $con->query("DELETE FROM user_information WHERE id=$delete_user");
    if ($delete_user) {
        echo "<script>alert('user do not accept succfully')</script>";
        header("location:students_list.php");
    } else {
        die('Error:' . mysqli_error($con));
    }
}
//pagination show data

// Get the total number of records from our table "students".
$total_pages = $con->query('SELECT * FROM user_information')->num_rows;

// Check if the page number is specified and check if it's a number, if not return the default page number which is 1.
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

// Number of results to show on each page.
$num_results_on_page = 10;
