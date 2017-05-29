
<?php
if(isset($_POST["mod"]) && $_POST['mod'] == "Edit") {
	$user = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM accounts WHERE username='" . $_POST["selected_user"] . "'"));
}
?>

<div class="thumbnail">

	<table class="table">
	
		<thead>
		  <tr>
			<th><center> <h2> Edit user </h2> </center> </th>
		  </tr>
		</thead>
		
		<tbody>
			<form method="post" enctype="multipart/form-data">
				<tr>
				  <th><b>Username:</b></th>
				  <td> <input type="text" name="username" required <?php echo 'value="'.$user['username'].'"' ?> /> </td>
				</tr>
				<tr>
				  <th><b>Password:</b></th>
				  <td> <input type="text" name="password" <?php echo 'value="'.$user['password'].'"' ?> /> </td>
				</tr>
				<tr>
				  <th><b>Admin:</b></th>
					<td>
						<select class="form-control" name="give_admin" style="width:180px;">
							<option>NO</option>
							<option>YES</option>
						</select>
					</td>
				</tr>
				<tr>
					<td> <center> <input class="btn btn-primary" type="submit" name="submitEditUser" /></center> </td>
					<input type="hidden" name="selected_user" <?php echo 'value="'.$user['username'].'"' ?> />
				</tr>
			</form>
		</tbody>
		
	</table>

</div>
	