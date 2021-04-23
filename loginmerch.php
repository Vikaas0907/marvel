<?php

session_start();
 $con = mysqli_connect('localhost','root','','merchandise');

?>



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
                      <li class="nav-item ">
                                                <a class="nav-link tm-nav-link" href="characters.html">Characters<span class="sr-only">(current)</span></a>
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





<!-- Modal -->


<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">New User???</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form class="form-container" id = "myform" action="action_page_reg.php"  method = "post">
      <div class="modal-body">
        
          <h3 class="my-4 text-center">Register</h3><hr>
         <div class="form-group">
            <label for="uname">User Name</label>
            <input type="text" class="form-control" id="uname" name="u_name" placeholder="Enter User name" required="true" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" class="form-control" id="fname" name="f_name" placeholder="Enter Last Name" required="true" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" class="form-control" id="lname" name="l_name" placeholder="Enter Fisrt Name" required="true" autocomplete="off">
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
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
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



<!--
           
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <form class="form-inline my-2  mr-auto my-lg-0" action="search.php">
      <input class="form-control" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="navbar-nav ml-auto">
 
          <li class="nav-item">
             <?php 
             $usna = $_SESSION["username"];
            $qud = "SELECT d.cust_id from customer as d where user_name = '$usna'";
             $resultd = $con->query($qud);  // or mysqli_query($con, $tourquery);

              $tourresultd = $resultd->fetch_array()[0] ?? '';
              $count = "SELECT count(*) from cart where cust_id = $tourresultd";
              $result = $con->query($count);  // or mysqli_query($con, $tourquery);

              $tourresult = $result->fetch_array()[0] ?? '';
            
            ?>
             
        <a href="mycart1.php" class="btn btn-primary" > my cart (<?php echo $tourresult; ?>) </a>
       </li>&nbsp; &nbsp;
      <li class="nav-item"> <a href="logout.php" class="btn btn-primary"> Logout </a>
      </li>
    </ul>
     </nav>  

-->


		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		  &emsp; &emsp;
			 <h4>Shop Marvel Merch</h4>
					&emsp; &emsp; &emsp;
                    <a href="#">Home</a>
					&emsp; &emsp; &emsp;
					
					&nbsp; &emsp; &emsp;&emsp; &emsp; &emsp;
             <form class="form-inline my-2  mr-auto my-lg-0" action="search.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      
    </form>
	  
		    <ul class="navbar-nav ml-auto">
 
          <li class="nav-item">
             <?php 
             $usna = $_SESSION["username"];
            $qud = "SELECT d.cust_id from customer as d where user_name = '$usna'";
             $resultd = $con->query($qud);  // or mysqli_query($con, $tourquery);

              $tourresultd = $resultd->fetch_array()[0] ?? '';
              $count = "SELECT count(*) from cart where cust_id = $tourresultd";
              $result = $con->query($count);  // or mysqli_query($con, $tourquery);

              $tourresult = $result->fetch_array()[0] ?? '';
            
            ?>
             
        <a href="mycart1.php" class="btn btn-primary" > my cart (<?php echo $tourresult; ?>) </a>
       </li>&nbsp; &nbsp;
      <li class="nav-item"> <a href="logout.php" class="btn btn-primary"> Logout </a>
      </li>
    </ul>
	</nav>   

<div class="container-fluid">

 
  <div class="text-center my-4">
  <h4 style="color:white;">Shop from these categories</h4>
</div>
  <div class="row">
<?php


  
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
	
	
  </div>
<script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>


<!-- Modal -->
