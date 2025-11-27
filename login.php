
  <?php 
  
  @include('header.php')
  ?>
<div class="container mt-5 ">
   <form action="./login_data.php" method="POST">
       <h1 class="text-center">Login form😊</h1>
        <div>
           <label for="">Email :</label>
            <input type="text" name="email" placeholder="Enter your email" class="form-control">
        </div>
        <div>
             <label for="">Password :</label>
              <input type="text" name="password" placeholder="Enter your password" class="form-control">
         </div>
          <button class="btn btn-primary" name="login">Login</button>     
    </form>
</div>

