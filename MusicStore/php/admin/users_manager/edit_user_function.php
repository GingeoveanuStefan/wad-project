<?php if (isset($_POST['submitEditUser'])) { 
	
	
	if($_POST['give_admin'] == "NO") $_POST['give_admin'] = FALSE;
	if($_POST['give_admin'] == "YES") $_POST['give_admin'] = TRUE;
	
	if (! ( 
		$db->query("UPDATE accounts SET ".
					"username ='" 	 . $_POST['username'] 		 . "', " .
					"password ='" 	 . $_POST['password'] 		 . "', " .
					"admin ='" 		 . $_POST['give_admin'] . "' WHERE username='" . $_POST['selected_user'] . "'") ) )
					
		echo "<center><h4> There is another user with the same username! </h4></center>";

}
?>
