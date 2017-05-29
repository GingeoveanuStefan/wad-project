
<?php
if(isset($_POST["mod"]) && $_POST['mod'] == "Edit") {
	$product = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM products WHERE uid='" . $_POST["product_uid"] . "'"));
}
?>

<div class="thumbnail">

	<table class="table">
	
		<thead>
		  <tr>
			<th><center> <h2> Edit product </h2> </center> </th>
		  </tr>
		</thead>
		
		<tbody>
			<form method="post" enctype="multipart/form-data">
				<tr>
				  <th><b>UID:</b></th>
				  <td> <input type="text" name="uid" required <?php echo 'value="'.$product['uid'].'"' ?> /> </td>
				</tr>
				<tr>
				  <th><b>Name:</b></th>
				  <td> <input type="text" name="name" required <?php echo 'value="'.$product['name'].'"' ?> /> </td>
				</tr>
				<tr>
				  <th><b>Description:</b></th>
				  <td> <textarea name="description"  > <?php echo $product['description'] ?> </textarea> </td>
				</tr>
				<tr>
				  <th><b>Category:</b></th>
				  <td> <input type="text" name="category" <?php echo 'value="'.$product['category'].'"' ?> /> </td>
				</tr>
				<tr>
				  <th><b>Price:</b></th>
				  <td> <input type="number" name="price" required <?php echo 'value="'.$product['price'].'"' ?> /> </td>
				</tr>
				<tr>
					<th><b>Image:</b></th>
					<td> <input type="file" name="image" id="image"> </td>
					<input type="hidden" name="max_size" value="2000000">
				</tr>
				<tr>
					<td> <center> <input class="btn btn-primary" type="submit" name="submitEditQuery" /></center> </td>
					<input type="hidden" name="original_uid" <?php echo 'value="'.$product['uid'].'"' ?> />
				</tr>
			</form>
		</tbody>
		
	</table>

</div>
	