<?php
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "student_affair_system";

$con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($con->connect_error) {
    die("Connection Failed" . $con->connect_error);
}
