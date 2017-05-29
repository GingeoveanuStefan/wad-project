
<tr>
	<td> <?php if($product['image'])
		echo '<img width=200 height=200 src="data:image/jpeg;base64,'.base64_encode( $product['image'] ).'"/>';
		else echo '<img width=200 height=200 src="images/placeholder.png"/>'; ?> 
	</td>
	
	<td>
		<p style="text-align:left;">
			<b>UID:</b> <?php echo $product["uid"]; ?>
			<span style="float:right;"> 
				<b>Price:</b> $ <a align="r"> <?php echo $product["price"]; ?>
			</span>
		</p>
		
		<center>
			<?php echo "<a href=\"?page=product&uid=".$product["uid"]."\">" . $product["name"] . "</a>" ?>
			</br>
			<p> <?php echo $product["description"]; ?> </p>
		</center>
	</td>
	
	<td style="vertical-align:bottom"> 
		<form action="" method="post">
			<?php if (isset($_POST['submitButton']) && ($_POST['submitButton'] == "Add to cart") && ($product["uid"] == $_POST['product_uid'])) { 
				echo "Added(".$_POST['quantity'].") to the your shopping cart.<br><br>";
			 } ?>
		  <input type="hidden" name="product_uid" value="<?php echo $product["uid"] ?>"/>
		  <input type="number" name="quantity" value="1" min="0" max="10" style="width: 100px;" />
		  <input type="submit" class="btn btn-default" name="submitButton" value="Add to cart"/>
		</form>
	</td>
</tr>


