<div class="col-md-9">
	<div class="thumbnail">
		<div class="caption-full">
			<h1 align="center">
				<?php
				if(isset($_SESSION["username"]) )
					echo "Welcome, ".$_SESSION["username"]."!";
				else
					echo "Welcome to our website!";
				?>
			</h1>
			<p class="error-message"><center><?php if(isset($_POST['login'])) echo $_POST['login'] //Login status; ?></center></p>
		</div>
	</div>
</div>

<?php 
	if(!isset($_SESSION["username"]) ){
		include($filepath."login_box.php");
	}
?>