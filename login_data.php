<?php
@include('db.php');

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `user` 
    WHERE email = '$email'
    && password = '$password';"


$res = mysqli_query($conn, $query);

if(!$res)
{
    echo ("successfully inserted" .mysqli_error($conn));
}
else{
    echo"not inserted";
}


}

?>