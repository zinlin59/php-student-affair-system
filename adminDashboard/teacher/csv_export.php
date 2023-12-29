<?php
require_once 'C:\xampp\htdocs\student_affair_system\adminDashboard\dbCon/dbConfig.php';

$query = $con->query("SELECT id,student_name,student_nrc,mark,admitted_year from student_information");

if ($query->num_rows > 0) {
    $f = fopen('php://memory', 'w');
    $fields =  array('ID', 'Name', 'NRC', 'Mark', 'Year');
    fputcsv($f, $fields);

    while ($row = $query->fetch_assoc()) {

        $lineData = array($row['id'], $row['student_name'], $row['student_nrc'], $row['mark'], $row['admitted_year']);
        fputcsv($f, $lineData);
    }
    fseek($f, 0);

    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename=data.csv');
    fpassthru($f);
}
exit;
