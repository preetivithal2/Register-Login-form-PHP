 <?php 
  @include('header.php')
  ?>



<div class="container mt-5">
    <h2 class="text-center mb-4">Student List</h2>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Batch</th>
          <th scope="col">Faculty</th>
          <th scope="col">Action</th>
        </tr>
     </thead>



 <?php
  
  @include('db.php');

  $query = "SELECT * FROM student";

  $res= mysqli_query($conn , $query);

  if(!$res)
  {
    die("Query Failed" . mysqli_error($conn));
  }
  

  else
  {
 while($row = mysqli_fetch_assoc($res)){
  echo
  "
         <tr>
            <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[email]</td>
            <td>$row[batch]</td>
            <td>$row[faculty]</td>
            <td>
               <button class='btn btn-primary' type ='submit'> <a href='' class='text-black'>Edit</a> </button>
          <button class='btn btn-danger' type ='submit'> <a href='./delete_data.php?id=$row[id]' class='text-black'>Delete</a></button>
            </td>
         </tr>
  ";
 }
  }
  
  ?>








     
  </tbody>
</table>

</div>
</body>
</html>