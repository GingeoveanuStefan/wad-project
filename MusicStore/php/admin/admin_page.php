

<?php if(!isAdmin()) header("Location: index.php") ?>



<div class="col-md-9">
	<div class="thumbnail">
		<div class="caption-full">
		
		<!-- ADMIN MENU -->
		<?php if(!isset($_GET["option"])) { ?>
			<a href="?page=user&option=products_manager" class="list-group-item">Products Management</a>
			<a href="?page=user&option=users_manager" class="list-group-item">Users Management</a>	
				
		<!-- ADMIN OPTION -->	
		<?php } else { 
				$filepath = 'php/admin/';
				if($_GET['option'] == "products_manager") {
					include($filepath.'products_manager/products_manager.php');
				}
				
				if($_GET['option'] == "users_manager") {
					include($filepath.'users_manager/users_manager.php');
				}
					
				
		}	?>
		</div>
	</div>
</div>

<?php //print_r($_POST); ?>