<?php
		session_start();

		$con = mysqli_connect('localhost','root','','merchandise');
		if($con){
			echo "<script>alert('connection successful..')</script>";
		}
		else{
			echo "<script>alert('connection failed..')</script>";
		}

		mysqli_select_db($con,'merchandise');

		$uname = $_POST['u_name'];
		$passwrd = $_POST['password'];

		$q = " select * from customer where user_name = '$uname' && password = '$passwrd' ";

		$result = mysqli_query($con,$q);

		

		if($result){

		$_SESSION['username'] = $uname;
		echo"<script>alert('Login successful.Redirecting to the next page...')</script>";
		echo"<script>location.href='loginmerch.php'</script>";

		}else{
			echo"<script>alert('invaild username or password')</script>";
		    echo"<script>location.href='merchandise.php'</script>";
		
		}


?>