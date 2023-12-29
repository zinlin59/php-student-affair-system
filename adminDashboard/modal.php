<?php
// Include the database configuration file  
require_once 'C:\xampp\htdocs\student_affair_system\adminDashboard\dbCon/dbConfig.php';
$result = $con->query("SELECT * FROM user_information");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<body>


    <table>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Action</td>

        </tr>
        <?php foreach ($result as $res) { ?>
            <tr>
                <td class="stud_id"><?php echo $res['student_nrc']; ?></td>
                <td><?php echo $res['student_name']; ?></td>
                <td><a href="#" class="btn btn_primary view_btn">view</a></td>
            </tr>
        <?php } ?>

    </table>
    <script>
        $(document).ready(function() {
            $('.view_btn').click(function(e) {
                e.preventDefault();
                alert("Hello");
            })
        })
    </script>
</body>

</html>