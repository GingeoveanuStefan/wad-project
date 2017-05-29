<?php if (isset($_POST['submitAddQuery'])) { 

	//verify if UID is indeed unique
	if(mysqli_fetch_array(mysqli_query($db, "SELECT * FROM products WHERE uid='".$_POST['uid']."'")) ) {
		echo "<center><h4> UID is not unique! </h4></center>";
		unset($_POST['submitAddQuery']);
	} else {
		$db->query("INSERT INTO products (uid, name, description, price, category) 
			VALUES ('"	.$_POST['uid']."','"
						.$_POST['name']."','"
						.$_POST['description']."','"
						.(double)$_POST['price']."','"
						.$_POST['category']."')"
					);
					
		if(!empty($_FILES['image']['tmp_name'])) {
			$_POST['image'] = addslashes(file_get_contents($_FILES['image']['tmp_name']));
			$db->query("UPDATE products SET image='".$_POST['image']."' WHERE uid='".$_POST['uid']."'");
		}

	}
} ?>