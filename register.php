  <?php @include('header.php')
  ?>

   <body>
     <div class="container">
         <form action="./add-register.php" method="POST">
             <h1 class="text-center my-4">Registration Form</h1>
            <div class="mb-3">
               <label for="username" class="form-label">Name:</label>
               <input type="text" placeholder="Enter your name" class="form-control" name="name" >
            </div>
            <div class="mb-3">
               <label for="email" class="form-label">Email:</label>
               <input type="email" placeholder="Enter your Email" class="form-control"name="email" >
            </div>  

              <div class="mb-3">
               <label for="address" class="form-label">Address:</label>
               <input type="text" placeholder="Enter your address" class="form-control" name="address" >
            </div>

            <div class="mb-3">
               <label for="password" class="form-label">Password:</label>
               <input type="password" placeholder="Enter your password" class="form-control" name="password" >
            </div>

          
              <div class="mb-3">
               <label for="phone" class="form-label">Phone:</label>
               <input type="password" placeholder="Enter phone" class="form-control" name="phone">
            </div>
            <button type="submit" class="btn btn-primary" name="register">Register</button>
         </form>
      </div>
     


