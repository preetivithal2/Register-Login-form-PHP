<?php
@include('header.php');
@include('db.php');


if(!isset($_SESSION['email'])){
    header("location:./login.php"); }

    $email = $_SESSION['email'];
    $query = "SELECT * FROM `student` WHERE email = '$email';";
    $res = mysqli_query($conn , $query);

    if(!$res)
    {
        echo "error";
    }

    else{
while($row = mysqli_fetch_assoc($res)){
    echo
    "
    <div class='container'>
   <img src='./uploads/$row[image]' alt="" width='400px'>
   <h2>Name: $row[name]</h2>        
    <h2>Email: $row[email]</h2>
    <h2>Phone: $row[phone]</h2>

    </div>
    ";}
}
  ?>