<div class="col-md-9">
	<div class="thumbnail">
		<div class="caption-full">
			<h1 align="center"> Welcome to our website! </h1>
			<?php if(isset($_POST['submitRegister'])) {
				if ( $db->query("INSERT INTO accounts (username, password) 
						VALUES ('"	.$_POST['username']."','"
									.$_POST['password']."')"
								) 
					) echo "<center><h4> Registration successful! </h4></center>";
				else echo "<center><h4> There is another account with the same username! </h4></center>";
			} ?>
		</div>
	</div>
</div>






<div class="col-md-9">
	
	<div class="thumbnail">
	
		<table class="table">
			
			<thead>
			  <tr>
				<th colspan="2"><center> <h2> Register </h2> </center> </th>
			  </tr>
			</thead>
			
			<footer>
				<form action="" method="post" id="frmLogin">
					<tr>
					   <th id="total" colspan="2"><center><b>Username:</b> :</center></th> 
					  <td><center> <input type="text" name="username" required /> </center></td>
					</tr>
					<tr>
					  <th id="total" colspan="2"><center><b>Password:</b> :</center></th>
					  <td><center> <input type="password" name="password" required /> </center></td>
					</tr>
					
					<tr>
						<td colspan="3"> <center> <input class="btn btn-success" type="submit" name="submitRegister" value="Register" /></center> </td>
					</tr>
				</form>
			</footer>
			
		</table>
	
	</div>
	
</div>