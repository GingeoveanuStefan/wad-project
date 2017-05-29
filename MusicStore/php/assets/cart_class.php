
<?php
class Cart {

	public function shipping_tax($value){
		$this->shipping_tax = $value;
	}

    public function add_product($product_uid, $quantity) {

		$newCartItem[$product_uid] = $quantity;
		if(!empty($this->cart_item)) {
			if(in_array($product_uid, array_keys($this->cart_item))) {
				foreach($this->cart_item as $uid => $qnt) {
					if($uid == $product_uid) {
						if(empty($this->cart_item[$uid])) {
							$this->cart_item[$uid] = 0;
						}
						$this->cart_item[$uid] += $quantity;
					}
				}
			} else {
				$this->cart_item = array_merge($this->cart_item, $newCartItem);
			}
		} else {
			$this->cart_item = $newCartItem;
			unset($newCartItem);
		}
    }
	
	public function remove_product($product_uid) {

		if(!empty($this->cart_item)) {
			if(in_array($product_uid, array_keys($this->cart_item))) {
				foreach($this->cart_item as $uid => $qnt) {
					if($uid == $product_uid) {
						unset($this->cart_item[$uid]);
					}
				}
			}
		}
    }
	
	public function total($db) {
		$total = 0;
		if(!empty($this->cart_item)) {
			foreach($this->cart_item as $product_uid => $quantity) {
				$sql = "SELECT * FROM products WHERE uid='" . $product_uid . "'";
				$products_array = mysqli_query($db, $sql);	//search product
				$product = mysqli_fetch_array($products_array);
				
				$total += $product['price'] * $quantity;
				
			}
		}
		$this->total = $total;
		return $total;
		
	}
	
	public function product_total($db, $uid) {
		$total = 0;
		if(!empty($this->cart_item)) {
			foreach($this->cart_item as $product_uid => $quantity) {
				if($product_uid == $uid){
					$sql = "SELECT * FROM products WHERE uid='" . $product_uid . "'";
					$products_array = mysqli_query($db, $sql);	//search product
					$product = mysqli_fetch_array($products_array);
					
					$total += $product['price'] * $quantity;
				}
			}
		}
		return $total;
		
	}
}
?>

<?php

?>