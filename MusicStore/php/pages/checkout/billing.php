
<?php if(!isset($_REQUEST["total"])) die(); ?>

<div class="col-md-9">

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
				  <td>$ <?php echo $_REQUEST["total"] ?></td>
				</tr>
				<tr>
				  <th id="subtotal" colspan="2">Shipping :</th>
				  <td>$ <?php echo $_REQUEST["shipping_tax"] ?></td>
				</tr>
				<tr>
				  <th id="total" colspan="2"><b>Total</b> :</th>
				  <td> <b> $ <?php echo ($_REQUEST["total"]+$_REQUEST["shipping_tax"]) ?> </b> </td>
				</tr>
			</tbody>
			
			<footer>
				<form action="?page=checkout" method="post">
					<input type="hidden" name="total" value="<?php echo $_REQUEST["total"] ?>"/>
					<input type="hidden" name="shipping_tax" value="<?php echo $_REQUEST["shipping_tax"] ?>"/>
					<tr>
					  <th id="total" colspan="2"><b>Your Name:</b> :</th>
					  <td> <input type="text" name="name" /> </td>
					</tr>
					<tr>
					  <th id="total" colspan="2"><b>Address:</b> :</th>
					  <td> <input type="text" name="address" /> </td>
					</tr>
					<tr>
					  <th id="total" colspan="2"><b>Email:</b> :</th>
					  <td> <input type="text" name="email" /> </td>
					</tr>
					<tr>
					  <th id="total" colspan="2"><b>Phone:</b> :</th>
					  <td> <input type="text" name="phone" /> </td>
					</tr>
					<tr>
						<td colspan="3"> <center> <input class="btn btn-success" type="submit" value="Place Order" /></center> </td>
					</tr>
				</form>
			</footer>
			
		</table>
	
	</div>
	
</div>