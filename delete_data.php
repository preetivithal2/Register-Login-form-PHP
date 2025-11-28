<?php
@include('db.php');

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $query = "DELETE FROM `student` WHERE id = $id";
    $res = mysqli_query($conn , $query);

    if(!$res){
        die("query failed".mysqli_error($conn));
    }

    else{
        header("location:./index.php");
    }
}

?>