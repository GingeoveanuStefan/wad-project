<?php if (isset($_POST['submitEditQuery'])) { 

	if(!empty($_FILES['image']['tmp_name'])) {
		$_POST['image'] = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$db->query("UPDATE products SET image='".$_POST['image']."' WHERE uid='".$_POST['original_uid']."'");
	}

	if (! ( 
		$db->query("UPDATE products SET ".
					"uid ='" 		 . $_POST['uid'] 		 . "', " .
					"name ='" 		 . $_POST['name'] 		 . "', " .
					"description ='" . $_POST['description'] . "', " .
					"price ='" 		 . $_POST['price'] 		 . "', " .
					"category ='" 	 . $_POST['category'] 	 . "' WHERE uid='" . $_POST['original_uid'] . "'") ) )
					
		echo "<center><h4> There is another product with the same UID! </h4></center>";

}
?>
