<?php

session_start();
$con = mysqli_connect('localhost','root','','merchandise');
//mysqli_select_db($con,'merchandise');

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
    <link rel="stylesheet" href="css/charac.css">
	<link rel="stylesheet" href="style.css">
  
</head>
<body>

<nav class="navbar-dark bg-dark">
	
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
  	<div><?php echo $row['prod_descrip']?></div>

  	<form action="addtocart1.php" method="post">
		<div class="form-group form-row">
		<label for="exampleInputPassword1"><b>Quantity</b></label>&nbsp; &nbsp;
		<input type="Number" class="form-control" id="exampleInputPassword1" name="quant" placeholder="Quantity" min="1" value="1" style="width: 450px">
		</div>
	   <button type="submit" name="add" class="btn btn-primary btn-small" >Add to Cart</button>
	   <input type="hidden" name="iname" value="<?php echo $row['prod_name']; ?>">
		<input type="hidden" name="price" value="<?php echo $row['prod_price']; ?>">
	</form>
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