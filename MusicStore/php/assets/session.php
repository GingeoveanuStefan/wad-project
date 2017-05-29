<?php 
	session_start();
	
	//LOGIN
	if (isset($_POST['login'])) {

		if ($_POST['login'] == "Login") {
			
			$login_user = mysqli_query($db, "SELECT * FROM accounts 
				WHERE username='".$_REQUEST['loginUsername']."' && password='".$_REQUEST['loginPassword']."'");
			if( mysqli_num_rows($login_user) == 0) {
				$_POST['login'] = "Invalid Username or Password!";	//Return invalid confirmation
			} else {
				$row  = mysqli_fetch_array($login_user);
				$_SESSION["username"] = $row['username'];
				if($row['admin']) $_SESSION["admin"] = $row['admin'];
				$_POST['login'] = "You are now logged in.";	//Return succesfull login confirmation
			}
		}
		
		if($_POST['login'] == "Logout") {
			unset($_SESSION["username"]);
			session_destroy ();
			$_POST['login']="You have logged out.";	//Return logout confirmation
		}
	}
	
	function isAdmin(){
		if(isset($_SESSION['username'])) {
			if(isset($_SESSION['admin'])) {
				return true;
			}
		}
		
		return false;
	}
	
	
	//INITIALISE CART
	if(!isset($_SESSION["cart"]))
		$_SESSION["cart"] = new Cart($db);
	
	$_SESSION["cart"]->shipping_tax(10);
	
	//CART ADD/REMOVE PRODUCT
	if(isset($_SESSION['cart'])) {
		if(isset($_POST['submitButton'])) {
			if($_POST['submitButton'] == "Add to cart"){	//Add to cart
				$_SESSION['cart']->add_product($_POST['product_uid'], $_POST['quantity']);
			}
			if($_POST['submitButton'] == "Remove Item"){	//Add to cart
				$_SESSION['cart']->remove_product($_POST['product_uid']);
			}
		} 
	}
	

?>