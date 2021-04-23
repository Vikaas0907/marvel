<?php
session_start();

$con=mysqli_connect("localhost", "root","", "merchandise");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}



//code for Cart

if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	//code for adding product in cart
	case "add":
		if(!empty($_POST["quantity"])) {
			$pid=$_GET["pid"];
			$result=mysqli_query($con,"SELECT * FROM products WHERE prod_id='$pid'");
	          while($productById=mysqli_fetch_array($result)){
			$itemArray = array($productById["prod_id"]=>array('name'=>$productById["prod_name"], 'prod_id'=>$productById["prod_id"], 'quantity'=>$_POST["quantity"], 'price'=>$productById["prod_price"], 'image'=>$productById["pic1"]));
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productById["prod_id"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productById["prod_id"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			}  else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	}
	break;

	// code for removing product from cart
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["prod_id"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	// code for if cart is empty
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE>Simple PHP Shopping Cart</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>


<!-- Cart ---->
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>

<a id="btnEmpty" href="cart.php?action=empty">Empty Cart</a>

<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Product Id</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr>
				<td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
				<td><?php echo $item["prod_id"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
				<td style="text-align:center;"><a href="cart.php?action=remove&code=<?php echo $item["prod_id"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>		
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
</div>



<!--
<div id="product-grid">
	<div class="txt-heading">Products</div>
	<?php
	$product= mysqli_query($con,"SELECT * FROM products ORDER BY prod_id ASC");
	if (!empty($product)) { 
		while ($row=mysqli_fetch_array($product)) {
		
	?>
		<div class="product-item">
			<form method="post" action="cart.php?action=add&pid=<?php echo $row["prod_id"]; ?>">
			<div class="product-image"><img src="images/<?php echo $row["pic1"]; ?>"></div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $row["prod_name"]; ?></div>
			<div class="product-price"><?php echo "$".$row["prod_price"]; ?></div>
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
		</div>
	<?php
		}
	}  else {
 echo "No Records.";

	}
	?>
</div>
-->


</BODY>
</HTML>