<div class="well">

	<table class="table">
		<thead>
		  <tr>
			<th colspan="2"><center> <h2> INVOICE </h2> </center> </th>
		  </tr>
		</thead>
	</table>

	<table class="table">
		<tbody>
			<tr>
			  <th>Name :</th>
			  <td><?php echo $order['customer_name'] ?></td>
			</tr>
			<tr>
			  <th>Address :</th>
			  <td><?php echo $order["address"] ?></td>
			</tr>
			<tr>
			  <th>Email :</th>
			  <td><?php echo $order["email"] ?></td>
			</tr>
			<tr>
			  <th>Phone :</th>
			  <td><?php echo $order["phone"] ?></td>
			</tr>
		</tbody>
	</table>

	<table class="table">
		<thead>
			<tr>
			  <th>Product UID</th>
			  <th>Product Name</th>
			  <th width="100">Price</th>
			</tr>
		</thead>
		<tbody>
		
		<?php foreach($_SESSION["cart"]->cart_item as $product_uid => $quantity) {
				$sql = "SELECT * FROM products WHERE uid='" . $product_uid . "'";
				$products_array = mysqli_query($db, $sql);	//search product
				$product = mysqli_fetch_array($products_array); ?>
				<tr>
					<td>  <?php echo $product['uid'] ?> </td>
					<td>  <?php echo $product['name'] ?> <span style="float:right;">x <?php echo $quantity ?> </span> </td>
					<td>$ <?php echo ($product['price']*$quantity) ?> </td>
				</tr>
		<?php } ?>
		
		</tbody>
		
		<footer>
			<tr>
			  <th id="subtotal" colspan="2">Subtotal :</th>
			  <td>$ <?php echo $_SESSION["cart"]->total($db) ?></td>
			</tr>
			<tr>
			  <th id="subtotal" colspan="2">Shipping :</th>
			  <td>$ <?php echo $_SESSION["cart"]->shipping_tax ?></td>
			</tr>
			<tr>
			  <th id="total" colspan="2"><b>Total</b> :</th>
			  <td> <b> $ <?php echo ($_SESSION["cart"]->total($db) + $_SESSION["cart"]->shipping_tax) ?> </b> </td>
			</tr>
			
			<tr>
				<td colspan="3"> <center> <input class="btn btn" type="submit" value="Print" /></center> </td>
			</tr>
		</footer>
		
	</table>
</div>
	
