<?php

session_start();
$con = mysqli_connect('localhost','root','','merchandise');


if(isset($_GET['productid'])){
    
            
        $_SESSION['p'] = $_GET['productid'];

        }else{
    echo "token not sent";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <li class="nav-item ">
        <a class="nav-link" href="admin_cat.php">Category <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="admin_prod.php">Products</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container my-4">
	<div class="text-center my-4">
		<h4>View Product Details</h4>
	</div><hr class="my-4">
    <?php

    $t = explode("$",$_SESSION['p']);
    $id = $t[1];
        $query = "SELECT * from products where prod_id = $id";

        $run = mysqli_query($con,$query);
        if($run){

            if(mysqli_num_rows($run)>0){

              while($row = mysqli_fetch_array($run))
              {
        
    ?>

<div class="row">
  <div class="col-lg-6 col-md-6 col-12">
  	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/<?php echo $row['pic1'] ?>" alt="First product image">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/<?php echo $row['pic2'] ?>" alt="Second product image">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/<?php echo $row['pic3'] ?>" alt="Third product image">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>

  <div class="col-lg-6 col-md-6 col-12">
  	<h4><?php echo $row['prod_name']; ?></h4>
  	<p><?php echo $row['prod_price'] ?></p>
  	<div><?php echo $row['prod_descrip']?></div><br><br>

  </div>
</div>

    <?php

}
}
}

    ?>

</div>



	<script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>