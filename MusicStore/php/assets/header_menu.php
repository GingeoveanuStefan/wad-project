
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

	<div class="container">

		<!-- LEFT -->
		<div class="navbar-header">
		  <a class="navbar-brand" href="?page=home">MusicStore</a>
		</div>
		
		<ul class="nav navbar-nav">
		  <li> 
			<a href="?page=cart"> Shopping Cart</a>
		  </li>
		</ul>
		
		<!-- RIGHT -->
		<ul class="nav navbar-nav navbar-right" style="height: 50px;">
		
		  <li>
			<a> <!-- Register/User button -->
			<form method="get">
			  <button type="submit" class="btn-link" style="padding: 0px; border:0px;">
				<span class="glyphicon glyphicon-user"></span> 
				
				<?php	
					// Logged -> User Page
					if(isset($_SESSION["username"])) {
						echo $_SESSION["username"]; //change menu text 
						//redirect page to user page ?>
						<input type="hidden" name="page" value="user"/>	
					<?php } //endif 
					
					// Not logged -> Register
					else {
						echo "Sign Up"; 
						//redirect page to register ?>
						<input type="hidden" name="page" value="register"/>
				<?php } //endelse ?>
				
			  </button>
			</form>
		   </a>
		  </li>
		  
		  <li>
		   <a> <!-- Login button -->
			<form action="?page=login" method="post" >
			  <button type="submit" class="btn-link" style="padding: 0px; border:0px;">
				
				<?php if(isset($_SESSION["username"]))	{ ?> <span class="glyphicon glyphicon-log-out"></span> 	<?php } ?>
				<?php if(!isset($_SESSION["username"]))	{ ?> <span class="glyphicon glyphicon-log-in"></span> 	<?php } ?>
				<?php if(isset($_SESSION["username"])) echo "Logout"; else echo "Login"; ?>
				<?php if(isset($_SESSION["username"]))	{ ?> <input type="hidden" name="login" value="Logout"/>	<?php } ?>
			  </button>
			</form>
		   </a>
		  </li>
		  
		</ul>
		
	</div>
</nav>
