<?php
		session_start();

		$con = mysqli_connect('localhost','root','','merchandise');
		if($con){
			echo "<script>alert('connection successful..')</script>";
		}
		else{
			echo "<script>alert('connection failed..')</script>";
		}


		$uname = $_POST['u_name'];
		$passwrd = $_POST['password'];

		$q = " select * from admin where name = '$uname' && password = '$passwrd' ";

		$result = mysqli_query($con,$q);

		$num = mysqli_num_rows($result);

		if($num == 1){

		$_SESSION['username'] = $uname;
		echo"<script>alert('Login successful.Redirecting to the next page...')</script>";
		 header('location:admin.php');

		}else{
			echo"<script>alert('invaild username or password')</script>";
		    echo"<script>location.href='merchandise.php'</script>";
		
		}


?>