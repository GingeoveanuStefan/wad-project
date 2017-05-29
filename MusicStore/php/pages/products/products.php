<div class="col-md-9">
	<div class="thumbnail">
		<h1 align="center">Welcome to our website!</h1>
		<p></p>
	</div>
	
	<table class="table">
		<thead>
		  <tr> 
			<th> <center> Image </center> </th>
			<th> <center> Description </center> </th>
			<th> <center> Action </center> </th>
		  </tr>
		</thead>
		<tbody>
		
		<?php function list_items() {
				global $db, $filepath;
				
				// check category
				if(isset($_GET["category"])) 
					$sql = "SELECT * FROM products WHERE category='" . $_GET["category"] . "'";
				else 
					$sql = "SELECT * FROM products";	// else display all
				
				$products_array = mysqli_query($db, $sql);	//search products
				
				while($product = mysqli_fetch_array($products_array)) {
					include($filepath.'product_template.php');
				}
			}
			
			list_items();
			
		?>
	
		</tbody>
	</table>
</div>