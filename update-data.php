<?php 
  @include('header.php');

  @include('db.php');

  if(isset($_GET['id']))
    {
      $id = $_GET['id'];
      $query = "SELECT * FROM `student` WHERE id = $id;";
      $res = mysqli_query($conn , $query);
   
        if($res){
          $row = mysqli_fetch_assoc($res);
        echo "successfully run";
        }
    
        else{
        die("query failed".mysqli_error($conn));
        }
    }


    
if (isset($_POST['update-data'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $batch = $_POST['batch'];
    $faculty = $_POST['faculty'];

     
    $query = "UPDATE `student` SET `name`='$name',`email`='$email',`batch`='$batch',`faculty`='$faculty' 
    WHERE `id`= $id";

$res = mysqli_query($conn, $query);

    if(!$res){
      echo "student successfully updated";
    header("location:./index.php");
    }

    else{
    echo "query failed";
    }

}
    ?>
  
     <div class="container mt-5 ">
        <form action="./student_data.php" method="POST">
            <h1 class="text-center">Update Student</h1>
              <div>
              <label for="">Id :</label>
              <input type="number" name="id" value="<?php echo $row['id'] ?>" class="form-control">
            </div>
            <div>
              <label for="">Name :</label>
              <input type="text" name='name' value="<?php echo $row['name'] ?>" placeholder="Enter your Name" class="form-control">
            </div>
            <div>
              <label for="">Email :</label>
              <input type="text" name="email" value="<?php echo $row['email'] ?>" placeholder="Enter your Email" class="form-control">
           </div>
           <div>
              <label for="">Batch :</label>
              <input type="text" name="batch"value="<?php echo $row['batch'] ?>" placeholder="Enter your Address" class="form-control">
           </div>

            <div>
               <label for="">Faculty :</label>
               <input type="text" name="faculty" value="<?php echo $row['faculty'] ?>" placeholder="Enter your password" class="form-control">
           </div>

           <button class="btn btn-primary" name="student" >
            Add-Student
           </button>
        </form>
     </div>





