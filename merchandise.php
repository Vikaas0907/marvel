<!DOCTYPE html>
<html>
<head>
  <title>Shop merchandise</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/charac.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"> 
    <style>
		body{
			background-color: #0C0004;
		}
	</style>
</head>
<body>


<div class="position-relative">
            <div class="position-absolute tm-site-header">
                <div class="container-fluid position-relative">
                    <div class="row">
                        <div class="col-5 col-md-8 ml-auto mr-0">
                            <div class="tm-site-nav">
                                <nav class="navbar navbar-expand-lg mr-0 ml-auto" id="tm-main-nav">
                                    <button class="navbar-toggler tm-bg-black py-2 px-3 mr-0 ml-auto collapsed" type="button"
                                        data-toggle="collapse" data-target="#navbar-nav" aria-controls="navbar-nav"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span>
                                            <i class="fas fa-bars tm-menu-closed-icon"></i>
                                            <i class="fas fa-times tm-menu-opened-icon"></i>
                                        </span>
                                    </button>
                                    <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                                        <ul class="navbar-nav text-uppercase">
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="Home page.html">Home</a>
                                            </li>
                      <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="#">Characters<span class="sr-only">(current)</span></a>
                                            </li>
                      <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="movies2.html">Movies</a>
                                            </li>
                      <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="upcoming.html">Updates </a>
                                            </li>
                      <li class="nav-item active">
                                                <a class="nav-link tm-nav-link" href="merchandise.php">Merchandise</a>
                                            </li>
                                            
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="contact.html">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tm-video-container">  
          <img id ="tm-video" src="img/nav-bar2.png">
            </div>
</div>


<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	
      <form class="form-container" id = "myform" action="action_page_reg.php"  method = "post">
      <div class="modal-body">
        
          <h3 class="my-4 text-center">Register</h3><hr>
		 <!-- <div class="form-group">
            <label for="uname">User ID</label>
            <input type="text" class="form-control" id="uname" name="cust_id" placeholder="Enter User ID" required="true" autocomplete="off">
          </div> -->
         <div class="form-group">
            <label for="uname">User Name</label>
            <input type="text" class="form-control" id="uname" name="u_name" placeholder="Enter User name" required="true" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" class="form-control" id="fname" name="f_name" placeholder="Enter First Name" required="true" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" class="form-control" id="lname" name="l_name" placeholder="Enter Last Name" required="true" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email ID" required="true" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="phno">Phone Number</label>
            <input type="text" class="form-control" id="phno" name="ph_no" placeholder="Enter Phone Number" required="true" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" name="address" placeholder="Enter Address" id="address" required="true"></textarea>
          </div>
         <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name = "password" placeholder="Password" maxlength="10" required="true">
          </div>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="reg" class="btn btn-primary">Register</button>
     
      </div>    
    </form>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
       <ul class="nav nav-tabs my-4" id="tabContent">
        <li class="active"><a href="#access-security" data-toggle="tab">Login As User&nbsp;&nbsp;|</a></li>&nbsp;&nbsp;
        <li><a href="#loginasadm" data-toggle="tab">Login as Admin</a></li>
        </ul>
  
      <div class="tab-content my-4">
        <div class="tab-pane active my-4" id="access-security">
          <div class="text-center my-4">
			  <h4 >Login as User</h4>
		  </div>
            <form action="action_page.php" method="post">
              <div class="form-group">
              <label for="uname">User Name</label>
              <input type="text" class="form-control" id="uname" name="u_name" placeholder="Enter User name" required="true" autocomplete="off">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name = "password" placeholder="Password" maxlength="10" required="true">
            </div>
       <button type="submit" name="submit" id="login_btn" class="btn btn-success btn-block">Login</button>
            </form>
        </div> 
        <div class="tab-pane" id="loginasadm">
         <div class="text-center my-4">
          <h4 >Login as Admin</h4>
        </div>
      <form action="action_page_adm.php" method="post">
        <div class="form-group">
            <label for="uname">Admin User Name</label>
            <input type="text" class="form-control" id="uname" name="u_name" placeholder="Enter User name" required="true" autocomplete="off">
          </div>
      <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name = "password" placeholder="Password" maxlength="10" required="true">
          </div>   
       <button type="submit" name="submitad" id="login_btn" class="btn btn-success btn-block">Login</button>
     </form>
       </div> 
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>     
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		  &emsp; &emsp;
			 <h4>Shop Marvel Merch</h4>	
					&emsp; &emsp; &emsp;
                   <a href="#">Home</a> 
					&emsp; &emsp; &emsp; &nbsp; &emsp; &emsp; &emsp; &emsp; &emsp;
					
             <!--<form class="form-inline my-2  mr-auto my-lg-0" action="search.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
      
    </form>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Login
</button>
</li>&nbsp; &nbsp;
<li class="nav-item">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#register">
Register
</button>
</li>
      <!--<li class="nav-item"> <div data-toggle="modal" data-target="#exampleModal"> Login </div> </li> 
	  &nbsp; &nbsp; &emsp;
    <li class="nav-item"> <div data-toggle="modal" data-target="#register" > Register</div> </li>-->
    
      &emsp;&emsp; &emsp; &emsp;
		
	</ul>
   </nav>   

<div class="container-fluid">
  <div class="text-center my-4">
  <h4 style="color:white"> Categories</h4>
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
          <a href="http://localhost/marvel/productpage.php?token=$<?php echo $row['cat_id']; ?>" class="btn btn-info" style="background-color:#cc0000">Shop</a>
        </div>
      </div>
    </div> 
	
        <?php    
      }
      ?>
  </div>
  <?php
    }else{ 

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
  
<div class="container-fluid">
<div class="text-center my-4">
<h4 style="color:white;"> All Products</h4>
</div><hr class="my-4">
<div class="row">
    <?php
        $query1 = "SELECT * from products";
        $run = mysqli_query($con,$query1);
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
  
  <footer class="footer">
    <div class="row">
        <div class="col-sm-6 col-md-4 footer-navigation">
            <h3><a href="#">Marvel<span>Fan Portal</span></a></h3>
            <p class="links"><a href="#">Home</a><strong> · </strong><a href="movies2.html">Movies</a><strong> · </strong><a href="upcoming.html">Updates</a><strong> · </strong><a href="characters.html">Characters</a><strong> · </strong><a href="contact.html">Contact</a></p>
            <p class="company-name">offical marvel site : <a href="https://www.marvel.com/ "> <span>https://www.marvel.com/ </span></a></p>
        </div>
	
        <div class="col-sm-6 col-md-4 footer-contacts">
            <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                <p><span class="new-line-span"> VV Puram</span>Bangalore, India</p>
            </div>
            <div><i class="fa fa-phone footer-contacts-icon"></i>
                <p class="footer-center-info email text-left"> +1 9485045958</p>
            </div>
            <div><i class="fa fa-envelope footer-contacts-icon"></i>
                <p> <a href="#" target="_blank"> <span>anjali.marvelfanportal@gmail.com</span></a></p>
            </div>
        </div>
		
        <div class="clearfix"></div>
        <div class="col-md-4 footer-about">
            <h4>About the website</h4>
            <p>This webiste is dedicated to marvel movie franchise and its fans.</p>
            <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
        </div>
    </div>
</footer>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
