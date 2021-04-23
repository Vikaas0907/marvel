<?php


session_start();

$con = mysqli_connect('localhost','root','','merchandise');

if(isset($_POST['upload'])){
	$id = $_POST['cat'];
	$pname = $_POST['pro_name'];
	$des = $_POST['pro_descr'];
	$quant = $_POST['pro_quant'];
	$price = $_POST['pro_price'];
	
	$finalimgarr = array();
	$extension = array('jpeg','jpg','png','wepg');
	foreach ($_FILES['image']['tmp_name'] as $key => $value) {
		# code...
		$filename = $_FILES['image']['name'][$key];
		$filename_tmp = $_FILES['image']['tmp_name'][$key];
		$ext = pathinfo($filename,PATHINFO_EXTENSION);

		$finalimg='';

		if(in_array($ext, $extension))
		{
			move_uploaded_file($filename_tmp, 'images/'.$filename);
			$finalimg = $filename;
		}
		else{
			echo" error";
		}
		array_push($finalimgarr,$finalimg);
    }
    $img1 = $finalimgarr[0];
    $img2 = $finalimgarr[1];
    $img3 = $finalimgarr[2];

    $q = "INSERT INTO products(cat_id,prod_name, prod_descrip, prod_qty,prod_price, pic1, pic2, pic3) VALUES ($id,'$pname','$des',$quant,$price,'$img1','$img2','$img3')";
	 $query = mysqli_query($con,$q);
	 if($query){
	 	echo "success";
	 }else{
	 	echo "failed insert";
	 }

	}
	// $allowed_ext = array(".png",".jpg",".jpeg",".webp");

	


	// 	$q = "INSERT into products(prod_name,prod_descrip,prod_qty,prod_price,pic1,pic2,pic3) values ('$pname','$des',$quant,$price,'$destinationfile','$destinationfile2','$destinationfile3')";
	// 	$query = mysqli_query($con,$q);
		


?>
