
<?php
	if(!isset($_SESSION["username"])) 
		header('Location: ?page=home');	//redirect to home if not logged
?>

<div class="col-md-9">
	<div class="thumbnail">
		<div class="caption-full">
			<h1 align="center">
			
			<?php echo "Welcome, ".$_SESSION["username"]."!"; ?>
			
			</h1>
			<p><center> This is the user page. </center></p>
		</div>
	</div>
</div>


<?php
	//admin rights
	if(isAdmin()) 
		include('php/admin/admin_page.php');
?>