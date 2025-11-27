  <?php 
  
  @include('header.php')
  
  
  ?>

   <body>
     <div class="container">
      <h1 class="text-center my-4">
         Registration Form
      </h1>
      <div>
         <!-- <form action="" method="post"> -->
            <!-- <div class="mb-3"> -->
               <label for="username" class="form-label">Name:</label>
               <input type="text" placeholder="Enter your name" class="form-control" name="name" >
            </div>
            <div class="mb-3">
               <label for="email" class="form-label">Email:</label>
               <input type="email" placeholder="Enter your Emaile" class="form-control"name="email" >
            </div>  

              <div class="mb-3">
               <label for="address" class="form-label">Address:</label>
               <input type="text" placeholder="Enter your address" class="form-control" name="address" >
            </div>

            <div class="mb-3">
               <label for="password" class="form-label">Password:</label>
               <input type="password" placeholder="Enter your name" class="form-control" name="password" >
            </div>

          
              <div class="mb-3">
               <label for="phone" class="form-label">Phone:</label>
               <input type="password" placeholder="Enter your number" class="form-control" name="phone" >
            </div>
            <button type="submit" placeholder="Enter your name" class="btn btn-primary">Register</button>
         <!-- </form>
      </div> -->
     </div>


