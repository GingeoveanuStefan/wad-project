<?php
	
	// define function
	function display_product_page($UID) {
		global $db, $filepath;
		
		if($product = mysqli_query($db, "SELECT * FROM products WHERE uid='" . $UID . "'") ) {
			
			if(!$product = mysqli_fetch_array($product)) die("Could not find the product in our database.");
			
			//Process new review
			if(isset($_POST['submit']) && $_POST['submit'] == "Review" ) {
				if(empty($_POST['username'])) $_POST['username'] = "Anonymous";
				echo "HERE";
				$db->query("INSERT INTO reviews ( product_uid, username, comment, rating ) 
					VALUES ('". $UID . "','" . $_POST['username'] . "','" . $_POST['comment'] . "','" . $_POST['rating'] ."')");
			}
			
			//Calc average rating
			if($avg_rating = mysqli_query($db, "SELECT AVG(rating) AS avgRating FROM reviews WHERE product_uid='" . $product['uid'] . "'")) {
				$avg_rating = mysqli_fetch_assoc($avg_rating);
				$avg_rating = (int) $avg_rating["avgRating"];
			}
			
			//Review count
			if( $reviewCount = mysqli_query($db, "SELECT COUNT(review) AS reviewCount FROM reviews WHERE product_uid='" . $product['uid'] . "'") ) {
				$reviewCount = mysqli_fetch_assoc($reviewCount);
				$reviewCount = (int) $reviewCount["reviewCount"];
			}
			
 
			
			include($filepath.'product_page_template.php');
		} else
			die("Product not in the database");
		
	}

	// run display function
	display_product_page($_GET["uid"]);
	
?>