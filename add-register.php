<?php
@include('db.php');
  

if (isset ($_POST['register'])){

$image_name = $_FILES["file"]["name"];
$image_size = $_FILES["file"]["size"];
$image_type = $_FILES["file"]["type"];  
$image_tmp_name = $_FILES["file"]["tmp_name"];


if (move_uploaded_file($image_tmp_name, "upload/".$image_name)) {
    $imageName = $image_name;


    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];


$query = "INSERT INTO `user`(`name`, `email`, `address`,`image`, `password`, `phone`) 
 VALUES 
 ('$name', '$email', '$address', '$imageName', '$password', '$phone')";

$res = mysqli_query($conn, $query);

if($res)
{
    echo"successfully inserted";
}
else{
    echo"not inserted";
}

}
}

?>


