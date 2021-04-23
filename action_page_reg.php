<?php

$con = mysqli_connect('localhost','root','','merchandise');


if(isset($_POST['reg'])){
 $custId = $_POST['cust_id'];
  $uname = $_POST['u_name'];
  $fname = $_POST['f_name'];
  $lname = $_POST['l_name'];
  $email = $_POST['email'];
  $phno = $_POST['ph_no'];
  $addr = $_POST['address'];
  $pass = $_POST['password'];

  $q = " INSERT INTO customer(cust_id,user_name, password, f_name,l_name, address , email,contact) VALUES ('$custId','$uname','$pass','$fname','$lname','$addr','$email','$phno') ";
  $query = mysqli_query($con,$q);

  if($query){
    echo'Data saved';
    header('Location: merchandise.php');
  }else{
    echo'Data not saved';
    }
}

?>