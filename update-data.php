  <?php 
  @include('header.php')
  ?>
  
     <div class="container mt-5 ">
<form action="./update-data.php" method="POST">
     <h1 class="text-center">Update Student</h1>
        <div>
    <label for="">Name :</label>
     <input type="text" name="name" placeholder="Enter your Name" class="form-control">
        </div>
              <div>
    <label for="">Email :</label>
     <input type="text" name="email" placeholder="Enter your Email" class="form-control">
        </div>

              <div>
    <label for="">Batch :</label>
     <input type="text" name="batch" placeholder="Enter your Address" class="form-control">
        </div>

              <div>
    <label for="">Faculty :</label>
     <input type="text" name="faculty" placeholder="Enter your password" class="form-control">
        </div>

        <button class="btn btn-primary" name="student" >
        Add-Student
        </button>
        </form>
     </div>





