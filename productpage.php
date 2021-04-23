<?php

session_start();

$con = mysqli_connect('localhost','root','','merchandise');


if(isset($_GET['token'])){
    
            
        $_SESSION['t'] = $_GET['token'];

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
  
</head>
<body>
    <div class="container-fluid">
<div class="text-center my-4">
<h4 > Shop These Products</h4>
</div><hr class="my-4">
<div class="row">
    <?php

    $t = explode("$",$_SESSION['t']);
    $id = $t[1];
        $query = "SELECT * from products where cat_id = $id";

        $run = mysqli_query($con,$query);
        if($run){

            if(mysqli_num_rows($run)>0){

              while($row = mysqli_fetch_array($run))
              {
        
    ?>
	
	<div class="col-lg-4 col-md-4 col-6 my-4">
	<div class="card" h-100>
	<div class="card-header" >
    <img src="images/<?php echo $row['pic1'] ?>" class="card-img-top" alt="Image" style="height: 455px;">
	</div>
	<div class="card-body">
    <h5 class="card-title" > <a style="color:black" href="http://localhost/marvel/viewp.php?productid=$<?php echo $row['prod_id']; ?>" class="card-link "><?php  echo $row['prod_name'] ?></a> </h5>
    <p class="card-text"> &#8377; <?php echo $row['prod_price'] ?> /-</p>

	
     
	</div>
	</div>
	</div>
	
	
    <?php

}

}
?>
</div>
<?php
}

    ?>
</div>
	<script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>