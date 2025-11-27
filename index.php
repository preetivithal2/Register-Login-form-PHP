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
     <tbody>
        <tr>
           <th scope="row">1</th>
           <td>Mark</td>
           <td>Otto</td> 
           <td>@mdo</td>
           <td>@mdo</td>
           <td>
                   <!-- Button trigger modal -->
             <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
               Edit
              </button>

                      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update-record</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Email">
        <input type="text" placeholder="Address">
        <input type="text" placeholder="Password">
        <input type="text" placeholder="Phone">
      </div>
      <div class="modal-footer">
    <button type="button" class="btn btn-success" data-bs-dismiss="modal">update</button>
      </div>
    </div>
  </div>
</div>
           <button class="btn btn-dark">Delete</button>
           </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
         <td>
                   <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Edit
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update-record</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Email">
        <input type="text" placeholder="Address">
        <input type="text" placeholder="Password">
        <input type="text" placeholder="Phone">
      </div>
      <div class="modal-footer">
    <button type="button" class="btn btn-success" data-bs-dismiss="modal">update</button>
      </div>
    </div>
  </div>
</div>
           <button class="btn btn-dark">Delete</button>
           </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>John</td>
      <td>Doe</td>
      <td>@social</td>
      <td>@mdo</td>
         <td>
                  <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Edit
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update-record</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" placeholder="Name">
        <input type="text" placeholder="Email">
        <input type="text" placeholder="Address">
        <input type="text" placeholder="Password">
        <input type="text" placeholder="Phone">
      </div>
      <div class="modal-footer">
    <button type="button" class="btn btn-success" data-bs-dismiss="modal">update</button>
      </div>
    </div>
  </div>
</div>
           <button class="btn btn-dark">Delete</button>
           </td>
    </tr>
  </tbody>
</table>

</div>
<