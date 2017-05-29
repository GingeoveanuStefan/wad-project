<div class="thumbnail">
	<table class="table">
		<thead>
			<th> UID </th>
			<th> NAME </th>
			<th> PRICE </th>
			<th> DESCRIPTION </th>
		</thead>

		<tbody>
		<?php
			
			function list_items_admin($db_conn) {
				
				$sql = "SELECT * FROM item";
				
				$itemlist = mysqli_query($db_conn, $sql);
				while($item = mysqli_fetch_array($itemlist) ) {
					include("php/admin/manage_products/item_row_template.php");
				}
			}
			
			list_items_admin($conn);
			
		?>
	
		</tbody>
	</table>
</div>