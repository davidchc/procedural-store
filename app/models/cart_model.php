<?php 

require_once "product_model.php";


if(!isset($_SESSION['cart'])){
  $_SESSION['cart'] = [];	
}

function addProductCart($id, $quantity) {
	if(!isset($_SESSION['cart'][$id])){ 
		$product = getProduct($id);
		$_SESSION['cart'][$id] = ['quantity' => $quantity, 'name' => $product['name'], 'price' => $product['price']]; 
	}
}
function deleteProductCart($id) {
	if(isset($_SESSION['cart'][$id])){ 
		unset($_SESSION['cart'][$id]); 
	} 
}
function updateProductCart($id, $quantity) {
	if(isset($_SESSION['cart'][$id])){ 
		if(!$quantity){
			deleteProductCart($id);
			return;
		}
		$_SESSION['cart'][$id]['quantity'] = $quantity;
	}
}

function updateProductsCart($data){
	foreach($data as $id => $quantity) {
		updateProductCart($id, $quantity);
	}
}

function getContentProductCart() {
	
	$results = [];
	
	if($_SESSION['cart']) {
		
		$cartContent = $_SESSION['cart'];

		foreach($cartContent as $id => $product) {
			$results[] = array(
							  'id' => $id,
							  'name' => $product['name'],
							  'price' => $product['price'],
							  'quantity' =>$product['quantity'],
							  'subtotal' => $product['quantity'] * $product['price'],
						);
		}
	}
	
	return $results;
}

function getTotalCart() {
	
	$total = 0;
	foreach(getContentCart() as $product) {
		$total += $product['subtotal'];
	} 
	return $total;
}