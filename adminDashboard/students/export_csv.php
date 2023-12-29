<?php

if (isset($_POST['export'])) {
    require_once 'C:\xampp\htdocs\student_affair_system\adminDashboard\dbCon/dbConfig.php';

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');
    $output = fopen("php://output", "w");
    fputcsv($output, array('ID', 'Name', 'NRC', 'Mark', 'Year'));
    $result = $con->query("SELECT id,student_name,student_nrc,mark,admitted_year from student_information");

    while ($row = mysqli_fetch_assoc($result)); {
        fputcsv($output, (array)$row);
    }
    fclose($output);
}
