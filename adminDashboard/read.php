<?php

// Include the database configuration file  
require_once 'C:\xampp\htdocs\student_affair_system\adminDashboard\dbCon/dbConfig.php';

if (isset($_GET['stuid'])) {
    $getId = $_GET['stuid'];
    $getdata = mysqli_query($con, "SELECT * FROM student_information WHERE id=$getId");

    if (mysqli_num_rows($getdata) == 1) {
        foreach ($getdata as $getdatas) {
            echo  $getid = $getdatas['id'];
            echo  $getname = $getdatas['student_name'];
            $getnrc = $getdatas['student_nrc'];
            $getmark = $getdatas['mark'];
            $getyear = $getdatas['admitted_year'];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="input-group">
        <input class="input--style-4" type="text" name="name" value="<?php echo $getname; ?>">
    </div>
</body>

</html>