<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "student_portal";

$conn = mysqli_connect($server , $user , $password , $database);  

if (!$conn){
    die("not connected to database: " .mysqli_connect_error());
}

?>