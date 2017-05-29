<script>
	function deleletconfig(){
		var del=confirm("Are you sure you want to delete this account?");
		if (del==true){
		   alert ("Item deleted")
		}
		return del;
	}
</script>

<?php if(isset($_POST['mod']) ) {
	if($_POST['mod'] == "Delete")
		$db->query("DELETE FROM accounts WHERE username='".$_POST['selected_user']."'");
	
	if($_POST['mod'] == "Edit")
		include($filepath.'users_manager/edit_user.php');
}
?>

<?php if (isset($_POST['submitEditUser'])) 
	include($filepath.'users_manager/edit_user_function.php')
?>

<div class="thumbnail">
		<a href="?page=user" class="list-group-item"><center>Return</center></a>
		
	<table class="table">
		<thead>
			<th> <center> USERNAME </center> </th>
			<th> <center> ADMIN </center> </th>
			<th colspan="2"> <center> ACTION </center> </th>
		</thead>

		<tbody>
		<?php
			
			$accounts = mysqli_query($db, "SELECT * FROM accounts");
			while($user = mysqli_fetch_array($accounts) ) { ?>
				<tr>
					<td> <center> <?php echo $user["username"]; ?> </center> </td>
					<td> <center> <?php if($user["admin"]) echo "YES"; else echo "NO"; ; ?> </center> </td>
					<form method="post">
						<td> <center> <input class="btn btn-link" type="submit" name="mod" value="Edit"/></center> </td>
						<td> <center> <input class="btn btn-link" type="submit" name="mod" value="Delete" onclick="return deleletconfig()"/></center> </td>
						<?php echo '<input type="hidden" name="selected_user" value="'.$user["username"].'"/>'; ?>
					</form>
				</tr>
				
			<?php }
			
			unset($accounts);
		?>
	
		</tbody>
	</table>
</div>