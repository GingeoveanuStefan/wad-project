<tr>
	<td> 
		<?php echo $product["uid"]; ?> 
		<br><br> 
		<?php echo '<img width=100 height=100 src="data:image/jpeg;base64,'.base64_encode( $product['image'] ).'"/>' ?> 
	</td>
	<td> <?php echo $product["name"]; ?> </td>
	<td> <?php echo $product["price"]; ?> </td>
	<td> <?php echo $product["description"]; ?> </td>
</tr>
<tr>
