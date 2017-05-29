
<div class="col-md-9">

	<?php if ( !isset($_POST['billingForm']) ) : ?>
		<!-- BILLING INFO -->
		<div class="thumbnail">
			<table class="table">
				<thead>
				  <tr>
					<th colspan="2"><center> <h2> Billing Info </h2> </center> </th>
				  </tr>
				</thead>
				<tbody>
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
				</tbody>
				<footer>
					<form action="?page=checkout" method="post">
						<tr>
						  <th id="total" colspan="2"><b>Name:</b></th>
						  <td> <input type="text" name="name" /> </td>
						</tr>
						<tr>
						  <th id="total" colspan="2"><b>Address:</b></th>
						  <td> <input type="text" name="address" /> </td>
						</tr>
						<tr>
						  <th id="total" colspan="2"><b>Email:</b></th>
						  <td> <input type="text" name="email" /> </td>
						</tr>
						<tr>
						  <th id="total" colspan="2"><b>Phone:</b></th>
						  <td> <input type="text" name="phone" /> </td>
						</tr>
						<tr>
							<td colspan="3"> <center> <input class="btn btn-success" type="submit" name="billingForm" value="Place Order" /></center> </td>
						</tr>
					</form>
				</footer>
			</table>
		</div>
	<?php endif; //end billing section ?>
	
	
	<?php if ( isset($_POST['billingForm']) && $_POST['billingForm'] == "Place Order" ) : ?>
	<div class="thumbnail">
			<h1 align="center">Thank You</h1>
	</div>
	
	
	<div class="thumbnail"> 
	<?php 
		$order = array('customer_name' => $_POST['name'], 
				'address' 		=> $_POST['address'], 
				'email' 		=> $_POST['email'],
				'phone' 		=> $_POST['phone'], 
				'total_price'	=> ($_SESSION["cart"]->total($db) + $_SESSION["cart"]->shipping_tax) );
		
		include ($filepath.'invoice.php'); 
		
		$db->query("INSERT INTO orders ( customer_name, address, email, phone, total_price ) 
					VALUES ('"	. $order['customer_name'] . "','" 
								. $order['address'] . "','"
								. $order['email'] . "','"
								. $order['phone'] . "','"
								. $order['total_price'] ."'
							)"
					);
		
		unset($order);
		unset($_SESSION['cart']);
	?>
		
	</div>
	
	<?php endif; //end checkout?>
	
</div>



<div class="col-md-9">
	
</div>