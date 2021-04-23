<?php

session_start();
$con = mysqli_connect('localhost','root','','merchandise');



if (isset($_POST['cadd'])) {
	$name = $_POST['iname'];
	$price = $_POST['price'];
	$quant = $_POST['quant'];
	$id = $_POST['id'];
	$img = $_POST['imga'];
	if(!isset($_SESSION['username'])){
	echo "<script>alert('Please Login to continue shopping');
	window.location.href='merchandise.php';</script>";
}else{

	$usna = $_SESSION["username"];
            $qud = "SELECT d.cust_id from customer as d where user_name = '$usna'";
             $resultd = $con->query($qud);  // or mysqli_query($con, $tourquery);

              $tourresultd = $resultd->fetch_array()[0] ?? '';

	$sel = mysqli_query($con , "SELECT * from cart where p_id = $id and cust_id = $tourresultd");
	if(mysqli_num_rows($sel) == 1){
		$up= mysqli_query($con,"UPDATE cart set p_quant = p_quant+$quant where p_id = $id and cust_id = $tourresultd");
		if($up){
			echo "<script>alert('Item added to cart');
				window.location.href='mycart1.php';
				 </script>";
		}
	}
	else{

    $insert = "INSERT INTO cart(cust_id,p_id, p_name, p_pic, p_price, p_quant) VALUES ($tourresultd,$id,'$name','$img',$price,$quant)";
    $query = mysqli_query($con,$insert);
    if($query){
    	echo "<script>alert('Item added to cart');
				window.location.href='mycart1.php';
				 </script>";
    }
    else{
    	echo error_get_last();
    	echo "<script>alert('Item not added to cart');
				window.location.href='loginmerch.php';
				</script>";
    }
	# code...
}
}

}


?>