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
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="admin_cat.php">Category <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin_prod.php">Products</a>
      </li>
    </ul>
  </div>
</nav>



<div class="container-fluid">

 
  <div class="text-center mt-3 p-3 card">
  <h4 >All Categories</h4>
</div>

  <div class="row">
<?php
$con = mysqli_connect('localhost','root','','merchandise');


  
$query = "SELECT * from categories";
$run = mysqli_query($con,$query);

    if(mysqli_num_rows($run)>0){
      $i = 0;

      while($row = mysqli_fetch_array($run))
      {
        

?>


          <div class="col-lg-4 col-md-4 col-6 my-4">
      <div class="card img-fluid " style="width:500px; height:400px;">
        <img class="card-img-top" id="i" src="<?php echo $row['cat_img']; ?>" alt="Card image" style="width:100% ;height:100% ; opacity: 50%;">
        <div class="card-img-overlay" style="text-align: center;">
          <h4 class="card-title"><?php echo $row['cat_name']?></h4>
          <a href="http://localhost/marvel/adminprodpage.php?token=$<?php echo $row['cat_id']; ?>" class="btn btn-info" style="background-color:#cc0000" >View Products</a>
        </div>
      </div>
    </div>
        
      

        <?php



        
      }
      ?>
  </div>
  <?php

    }else{
      //echo '<script> alert("You have not registered for any events..");</script>';

      ?>

      <div class="card">
        <div class="card-body" style="text-align: center;">
          No categories are present..
        </div>
        
      </div>

      <?php
    }

    ?>



	<script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>







</body>
</html>