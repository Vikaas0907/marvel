<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/charac.css">

</head>
<body>




<div class="container-fluid my-4">
<div class="text-center">
	<h4 >Shop from these categories...</h4>
</div>
	



<div class="row">
	<?php

$con = mysqli_connect('localhost','root','','merchandise');


if(isset($_POST['upload'])){

	$text = $_POST['text'];
	$files = $_FILES['image'];

	$filename = $files['name'];
	$fileerror = $files['error'];
	$filetmp = $files['tmp_name'];


	$fileext = explode('.', $filename);
	$filecheck = strtolower(end($fileext));

	$fileextstored = array('png','jpg','jpeg','webp');

	if(in_array($filecheck, $fileextstored)){

		$destinationfile = 'images/'.$filename;
		move_uploaded_file($filetmp, $destinationfile);


		$q = "INSERT into categories(cat_name,cat_img) values ('$text','$destinationfile')";
		$query = mysqli_query($con,$q);
	}



}
 

 //query to select categories from database..
  
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
		      <a href="http://localhost/marvel/productpage.php?token=$<?php echo $row['cat_id']; ?>" class="btn btn-info" >Shop</a>
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
</div>
<script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>








