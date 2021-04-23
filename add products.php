<?php

session_start();




?>

<!DOCTYPE html>
<html>
<head>
	<title>Add products</title>
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
  <a class="navbar-brand" href="#"> &emsp; &emsp; Admin Portal</a>
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



<div class="container">

<form method="post" action="uploadprod.php" enctype="multipart/form-data">
			
			<div class="form-group">
			    <label for="exampleFormControlTextarea1">Choose Category</label>
			    <input type="Number" name="cat" placeholder="Choose Category" class="form-control" id="exampleFormControlTextarea1">
			 </div>
			<div class="form-group">
			    <label for="exampleFormControlTextarea1">Product Name</label>
			    <input type="text" name="pro_name" placeholder="Enter product name" class="form-control" id="exampleFormControlTextarea1">
			 </div>
			 <div class="form-group">
			    <label for="exampleFormControlTextarea1">Product Description</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" name="pro_des" rows="3"></textarea>
			 </div>
			 <div class="form-group">
			    <label for="quant">Product Quantity</label>
			    <input type="Number" name="pro_quant" placeholder="Enter product quantity" class="form-control" id="quant">
			 </div>
			 <div class="form-group">
			    <label for="pri">Product Price</label>
			    <input type="Number" name="pro_price" placeholder="Enter product price" class="form-control" id="pri">
			 </div>
  			<div class="form-group">
			    <label for="exampleInputEmail1">Upload Product Image1</label>
			    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image[]">
			</div>
			 <div class="form-group">
			    <label for="exampleInputEmail1">Upload Product Image2</label>
			    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image[]">
			</div>
			<div class="form-group">
			    <label for="exampleInputEmail1">Upload Product Image3</label>
			    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image[]">
			</div>
			<div>
				<input type="submit" class="btn btn-primary" name="upload" value="Add Product">
			</div>
		</form>
</div>

</body>
</html>