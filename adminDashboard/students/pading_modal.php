<?php
require_once 'C:\xampp\htdocs\student_affair_system\adminDashboard\dbCon/dbConfig.php';

echo $userid = $_POST['userid'];

$modal_result = $con->query("SELECT * FROM user_information WHERE id=$userid");
// update Access Student
if (isset($_GET['access_id'])) {
    $acc = "access";
    $accessid = $_GET['access_id'];
    $update_access = $conn->query("UPDATE user_information SET access=$acc WHERE id=$accessid");
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
    <form action=""></form>
    <div class="modal-body">
        <div class="table-stats order-table ov-h">
            <table class="table ">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>ID</th>
                        <th>gender</th>
                        <th>NRC</th>
                        <th>Birthday</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($modal_result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['student_name'] ?></td>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['student_nrc']; ?></td>
                            <td><?php echo $row['access']; ?></td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal-footer">

        <a href="/student_affair_system/adminDashboard/admin_dashboard.php?access_id=<?php echo $row['id'] ?>"> <button type="submit" name="modalSave" class="btn btn-primary">Save</button> </a>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

    </div>
<?php   } ?>

</body>

</html>
<?php

?>