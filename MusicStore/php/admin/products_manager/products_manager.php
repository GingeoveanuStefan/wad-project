<script>
	function deleletconfig(){
		var del=confirm("Are you sure you want to delete this record?");
		if (del==true){
		   alert ("Item deleted")
		}
		return del;
	}
</script>

<?php if(isset($_POST['mod']) ) {
	if($_POST['mod'] == "Delete")
		$db->query("DELETE FROM products WHERE uid='".$_POST['product_uid']."'");
	
	if($_POST['mod'] == "Edit")
		include($filepath.'products_manager/edit_product.php');
	if($_POST['mod'] == "Add product")
		include($filepath.'products_manager/add_product.php');
}
?>

<?php if (isset($_POST['submitAddQuery'])) 
	include($filepath.'products_manager/add_product_function.php')
?>

<?php if (isset($_POST['submitEditQuery'])) 
	include($filepath.'products_manager/edit_product_function.php')
?>

<div class="thumbnail">
		<a href="?page=user" class="list-group-item"><center>Return</center></a>
		
		<form method="post">
			<a class="list-group-item"><center><input class="btn btn-link" type="submit" name="mod" value="Add product"/></center></a>
		</form>
		
	<table class="table">
		<thead>
			<th> UID </th>
			<th> NAME </th>
			<th> PRICE </th>
			<th> DESCRIPTION </th>
			<th> CATEGORY </th>
		</thead>

		<tbody>
		<?php
			
			$itemlist = mysqli_query($db, "SELECT * FROM products");
			while($product = mysqli_fetch_array($itemlist) ) { ?>
				<tr>
					<td> 
						<?php echo $product["uid"]; ?> 
						<br><br> 
						<?php echo '<img width=100 height=100 src="data:image/jpeg;base64,'.base64_encode( $product['image'] ).'"/>' ?> 
					</td>
					<td> <?php echo $product["name"]; ?> </td>
					<td> <?php echo $product["price"]; ?> </td>
					<td> <?php echo $product["description"]; ?> </td>
					<td> <?php echo $product["category"]; ?> </td>
				</tr>
				<form method="post">
					<tr>
						<td> <center> <input class="btn btn-link" type="submit" name="mod" value="Edit"/></center> </td>
						<td> <center> <input class="btn btn-link" type="submit" name="mod" value="Delete" onclick="return deleletconfig()"/></center> </td>
						<?php echo '<input type="hidden" name="product_uid" value="'.$product["uid"].'"/>'; ?>
					</tr>
				</form>
			<?php }
			
			unset($itemlist);
		?>
	
		</tbody>
	</table>
</div>