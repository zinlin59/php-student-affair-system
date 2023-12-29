<?php
session_start();
if (!isset($_SESSION['user_array'])) {
    header("location: /student_affair_system/index.php");
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
    <?php echo $_SESSION['user_array']['student_name'] ?></br>
    <?php echo $_SESSION['user_array']['student_name'] ?></br>
    <?php echo $_SESSION['user_array']['student_name'] ?></br>
    <?php echo $_SESSION['user_array']['student_name'] ?></br>
    <?php echo $_SESSION['user_array']['student_name'] ?></br>

</body>

</html>