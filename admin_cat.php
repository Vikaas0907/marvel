<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Admin Portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    	 <li class="nav-item ">
        <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="admin_cat.php">Category <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin_prod.php">Products</a>
      </li>
    </ul>
  </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Event Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form class="form-container" id="myform" action="delete_cat.php" method = "post">
      <div class="modal-body">
        
        <input type="hidden" name="delid" id="delid">

          <h4>DO YOU WANT TO DELETE THIS DATA?</h4>
          
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
        <button type="submit" name="deletedata" class="btn btn-primary">YES</button>
     
      </div>
      
    </form>


    </div>
  </div>
</div>

	


<div class="container-fluid">

 
  <div class="text-center p-3 card">
  <h4 >All Categories</h4>
</div>

<div class=" p-3 card">
 	<a class = " btn btn-primary" href="add category.php" style="background-color: #cc0000">Add Categories</a>

</div>

 <div class="card">
        <div class="card-body">


         
          
               

          <?php

            $con = mysqli_connect('localhost','root','','merchandise');


  
$query = "SELECT * from categories";
$run = mysqli_query($con,$query);

    
        
          ?>
          <table class="table table-hover" id ="mytable">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Category Name</th>
                  <th scope="col">Category Image</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
          <?php
if(mysqli_num_rows($run)>0){
      $i = 0;

      while($row = mysqli_fetch_array($run))
      {
          ?>

              <tbody>
                <tr>
          
                  <td><?php echo $row['cat_id']; ?></td>
                  <td><?php echo $row['cat_name']; ?></td>
                  <td><img src="<?php echo $row['cat_img']; ?>" alt="card image" style="width: 100px; height: 100px;"></td>
                  <td><button type="button" class="btn btn-danger deletebtn">REMOVE</button></td>

                </tr>
              </tbody>

          <?php
              }
            }else{
              echo "No record found";
            }
          ?>

          </table>
        </div>
      </div>
  




	<script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

<script type="text/javascript">

  $(document).ready( function() {
      $('.deletebtn').on('click',function(){

          $('#deletemodal').modal('show');

             $tr = $(this).closest('tr');

              var data = $tr.children("td").map(function() {
                return $(this).text();
              }).get();

              console.log(data);

              $('#delid').val(data[0]);
              
                          
      });
  })

</script>





</body>
</html>