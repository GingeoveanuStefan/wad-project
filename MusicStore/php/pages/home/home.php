

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
			<img src="images/music-colour-splash.jpg">
			<p><center> </center></p>
		</div>
	</div>
</div>