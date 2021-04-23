<?php
 	
	$con = mysqli_connect('localhost','root','','merchandise');

	if(isset($_POST['deletedata']))
	{
		$id = $_POST['delid'];
		

		$query = "DELETE FROM products WHERE prod_id=$id  ";
		$q = mysqli_query($con,$query);

		if($q){
			echo '<script> alert("Data Deleted"); </script>';
			header("Location: admin.php");
		}
		else{
			echo '<script> alert("Data Not Deleted"); </script>';
		}
	}

?>