<?php

session_start();
$con = mysqli_connect('localhost','root','','merchandise');


if (isset($_GET['update_cart'])) {
   $usna = $_SESSION["username"];
                    $qud = "SELECT d.cust_id from customer as d where user_name = '$usna'";
                     $resultd = $con->query($qud);  // or mysqli_query($con, $tourquery);

                      $tourresultd = $resultd->fetch_array()[0] ?? '';
	# code...
	foreach ($_SESSION['cart'] as $key => $value) {
		# code...
		$up = mysqli_query($con,"UPDATE cart set p_quant = $value where p_id = $key and cust_id=$tourresultd");
		if ($up) {
			# code...
			echo "<script>alert('Cart Updated');
				window.location.href='mycart1.php';
				 </script>";
		}
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>My cart</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>






<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Event Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form class="form-container" id="myform" action="deletepcart.php" method = "post">
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

<div class="container ">
	<div class="row">
		<div class="col-lg-12 text-center border rounded bg-dark text-white my-5">
			<h1>MY CART</h1>
		</div>
		<div class="col-lg-8">
			<table class="table text-center">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item Image</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
      <th scope="col"></th>
    </tr>
  </thead>
  
  <tbody class="text-center">
  	<?php
    $usna = $_SESSION["username"];
                    $qud = "SELECT d.cust_id from customer as d where user_name = '$usna'";
                     $resultd = $con->query($qud);  // or mysqli_query($con, $tourquery);

                      $tourresultd = $resultd->fetch_array()[0] ?? '';
        $query = "SELECT * from cart where cust_id = $tourresultd";
        $runx = mysqli_query($con,$query);
        if($runx){

            if(mysqli_num_rows($runx)>0){
            	$_SESSION['cart'] = array();
            	$total =0;
            	$sr = 0;
              while($row = mysqli_fetch_array($runx))
              {
              	$sr = $sr+1;

              	$total = (($row['p_quant'])*($row['p_price']))+$total;
              	
              	$id = $row['p_id'];
              	?>
              	<tr><?php 
                       
              				$qur=mysqli_query($con,"SELECT * from products where prod_id = '$id'");
      						while($run = mysqli_fetch_array($qur)){
      							$img = 'images/'.$run['pic1'];
              			?>
              		<td><?php echo $sr ?></td>
              		<td><img src="<?php echo $img?>" alt='alt' style='width:100px; height: 100px;'></td>
              		<td><?php echo $row['p_name'] ?></td>
              		<td><?php echo $row['p_price'] ?></td>
              		<td>
              			
              			<form>
              			<input type="number" name="quant" value="<?php echo $row['p_quant'] ?>" min = "1" max = "<?php echo $run['prod_quant'] ?>">
              			<input type="hidden" name="id" value="<?php echo $id ?>">

              			<input type="submit" name = "update" style="display: none;">
              			<?php

              		}
              		?>
              			
              		</form>
              		<?php
              			if (isset($_GET['update'])) {

              				# code...
              				$uid = $_GET['id'];
              				$uquant = $_GET['quant'];

              				$up = mysqli_query($con,"UPDATE cart set p_quant = $uquant where p_id = $uid and cust_id = $tourresultd");
							if ($up) {
								# code...
								echo "<script>
									window.location.href='mycart1.php';
									 </script>";
							}
              			}
              		?>
              	</td>
              		<td><!-- <form action='addtocart1.php' method='post'>

 			<button name='remove_item' class='btn btn-danger'>REMOVE</button>
      
 			<input type='hidden' name='itemid' value='<?php $id ?>'>
      
 			</form> --><button type="button" class="btn btn-danger deletebtn">REMOVE</button>

 		</td>
              	</tr>
              	<?php
              
          }
      }
  }
              ?>
    
  </tbody>

</table>



<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form class="form-container" id="myform" action="checkout.php" method = "post">
      <div class="modal-body">
        
          <h3>Enter your address and confirm details</h3>
          <div class="form-group">
            <label for="evtdate">Username</label>
            <input type="text" class="form-control" id="noseatsu" name = "username" placeholder="Your Username" value="<?php echo $_SESSION['username']?>" readonly="true">
          </div>
          <div class="form-group">
            <label for="evtdate">Total</label>
            <input type="text" class="form-control" id="noseatsu" name = "total" placeholder="Your Total" value="<?php echo $total?>"readonly="true">
          </div>
         
          <div class="form-group">
            <label for="eventvenue">Address</label>
            <textarea class="form-control" name="add" placeholder="Enter your shipping address" id="eventvenue" required="true"></textarea>
          </div>
          
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Continue Shopping</button>
        <button type="submit" name="checkout" class="btn btn-primary" >Checkout</button>
      </div>
      
    </form>


    </div>
  </div>
</div>




<div class="row">
<a href="loginmerch.php" class="btn btn-info px-3">Continue Shopping</a>&nbsp;&nbsp;&nbsp;&nbsp;<br>
<form>
	<button name="update_cart" class="btn btn-warning">Update Cart</button> 

</form>
</div>
		</div>
		<div class="col-lg-4">
			<div class="border bg-light rounded p-4">
			<h4>TOTAL:</h4>
			<h5 class="text-center tot"><?php if($total ==0){
        echo 0; }
        else{echo $total;}?></h5><br>
			<form action="#" method="post">
				<div class="custom-control custom-radio">
  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked>
  <label class="custom-control-label" for="customRadio1">Cash On Delivery</label>
</div><br>
        
			
        
			</form>
        <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#editmodal">Checkout</button>
      
		</div>
		</div>
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

              $('#delid').val(data[2]);
              
                          
      });
  })

</script>

</body>
</html>