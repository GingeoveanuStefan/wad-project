<tr>
	<td> <?php echo $product["uid"]; ?> </td>
	<td> <?php echo '<a href="?page=product&uid='.$product["uid"].'">' . $product["name"] . '</a>' ?> </td>
	<td> $ <?php echo $product["price"]; ?> <br>  x <?php echo $quantity; ?> <br> = $ <?php echo $_SESSION['cart']->product_total($db,$product["uid"]); ?> </td>
	<td>
		<form action="" method="post">
		  <input type="hidden" name="product_uid" value="<?php echo $product["uid"]?>"/>
		  <input type="submit" class="btn btn-default" name="submitButton" value="Remove Item"/>
		</form>
	</td>
</tr>

