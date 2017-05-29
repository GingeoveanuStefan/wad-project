<?php if(!isset($_SESSION['cart'])) die(); ?>

<div class="col-md-9">
	<div class="thumbnail" align="center">
		<h1>Welcome to our website!</h1>
		<p> <?php if(isset($_POST['removeFromCart'])) echo $_POST['removeFromCart']; else echo "This is your Shopping Cart."; ?> </p>
	</div>
	
	<?php if(isset($_SESSION["cart"]->cart_item)) { // cart initialisation succesfull ?>
	
	<table class="table">
		<thead>
		  <tr>
			<th>UID</th>
			<th>Name</th>
			<th width="100">Price</th>
			<th>Action</th>
		  </tr>
		</thead>
		<tbody>
		
		
		
			<!-- PRODUCTS LIST -->
			<?php foreach($_SESSION["cart"]->cart_item as $product_uid => $quantity) {
					$sql = "SELECT * FROM products WHERE uid='" . $product_uid . "'";
					$products_array = mysqli_query($db, $sql);	//search product
					$product = mysqli_fetch_array($products_array);
					include($filepath.'cart_product_template.php');
				} ?>

	
		</tbody>
		
		<footer>
			<tr>
			  <th id="subtotal" colspan="2">Subtotal :</th>
			  <td>$ <?php echo $_SESSION["cart"]->total($db); ?></td>
			</tr>
			<tr>
			  <th id="subtotal" colspan="2">Shipping :</th>
			  <td>$ <?php echo $_SESSION["cart"]->shipping_tax; ?></td>
			</tr>
			<tr>
			  <th id="total" colspan="2"><b>Total</b> :</th>
			  <td> <b> $ <?php echo ($_SESSION["cart"]->total($db) + $_SESSION["cart"]->shipping_tax) ?> </b> </td>
			</tr>
		</footer>
		
		
	</table>	
	<form action="?page=checkout" method="post">
	<center> 
		<input class="btn btn-success" type="submit" value="Place Order" />
		<input type="hidden" name="total" value="<?php echo $total ?>"/>
		<input type="hidden" name="shipping_tax" value="<?php echo $shipping_tax ?>"/>
	</center>
	
	</form>
	
	<?php } else echo "<h4><center>The shopping cart is empty.</center></h4>"; ?>
	
	
</div>	


		

