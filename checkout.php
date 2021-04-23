<?php 

session_start();
$con = mysqli_connect('localhost','root','','merchandise');


if(isset($_POST['checkout'])){
	
	$tot = $_POST['total'];
	$addr = $_POST['add'];
	$date = date('Y-m-d');
	$usna = $_SESSION["username"];
	$qud = "SELECT d.cust_id from customer as d where user_name = '$usna'";
     $resultd = $con->query($qud);  // or mysqli_query($con, $tourquery);

     $tourresultd = $resultd->fetch_array()[0] ?? '';
     

     $insertorder = mysqli_query($con , "INSERT into orders(cust_id, order_date, shipping_add, status_id , total_price) values ($tourresultd,'$date','$addr',1, $tot)");


     if($insertorder){

     	
     }
     $id = "SELECT order_id from orders where cust_id = $tourresultd order by order_id desc" ;
     	$result = $con->query($id);  // or mysqli_query($con, $tourquery);

     $tourresult = $result->fetch_array()[0] ?? '';




     	$sel = mysqli_query($con, "SELECT c.p_id,c.p_quant,p.prod_price from cart as c inner join products as p on c.p_id = p.prod_id where cust_id = $tourresultd");
    	if(mysqli_num_rows($sel)>0){
    		while($row = mysqli_fetch_array($sel))
              {
              	$pid = $row['p_id'];
              	$p_qu = $row['p_quant'];
              	$p_price = $row['prod_price'];
              	$total = $p_qu * $p_price;
     	$insertordet = mysqli_query($con,"INSERT into order_details(order_id, prod_id, order_qty, tot_price) values ($tourresult,$pid,$p_qu,$total)");
     	if ($insertordet) {
     		# code...
     		$del = mysqli_query($con , "DELETE from cart where cust_id = $tourresultd");
     		if($del){
				
     			echo "<script> alert('Order Placed..Thank you for shopping....'); 
     		window.location.href='loginmerch.php';</script>";

     		}
     	}
     	
     	

     }
 }
}
     

?>