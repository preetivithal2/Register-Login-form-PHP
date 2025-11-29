<?php
session_start();
@include('db.php');

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `user` WHERE email = '$email' && password = '$password'";

    $res = mysqli_query( $conn , $query);

    if(!$res) {
       echo ("Query failed" .mysqli_error($conn));
    }
    else{
      $row = mysqli_num_rows($res);
      if($row > 0 ) {
        $_SESSION['email'] = $email;
        echo "Query successfully run";


        while($row = mysqli_fetch_assoc($res)){
        if($row['user_role'] == "admin"){
        header("location:./admin.php");

    }
    else if($row['user_role'] == "faculty"){
        header("location:./faculty.php");

        // header("location:./index.php");
    } 
    else{
        header("location:./student.php");
    }
    }
    }
    else{
        echo "query is not run";
        header("location:./register.php");
    }
    }
}

?>