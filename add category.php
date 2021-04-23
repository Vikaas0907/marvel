


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

	
</head>
<body>


	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">&emsp; &emsp; Admin Portal</a>
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


	<div class="container my-4">

		<form method="post" action="uploadtry.php" enctype="multipart/form-data">
  			<div class="form-group">
			    <label for="exampleInputEmail1">Upload Category Image</label>
			    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
			</div>
			 <div class="form-group">
			    <label for="exampleFormControlTextarea1">Category Name</label>
			    <input type="text" name="text" placeholder="Enter category name" class="form-control" id="exampleFormControlTextarea1">
			 </div>
			<div>
				<input type="submit" class="btn btn-primary" name="upload" value="Add Category">
			</div>
		</form>
	</div>
	<script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>