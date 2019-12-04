<?php 
require_once DIR.'app/models/cart_model.php';


if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$action = $_POST['action'] ?? 'add';

	if($action == 'add'){
		addProductCart(filter_input(INPUT_POST, 'id'), 1);
	}
	if($action == 'update'){
		updateProductsCart($_POST['quantity']);
		//addProductCart(filter_input(INPUT_POST, 'id'), 1);
	}

	header('location: index.php?page=carrinho');
}

$products = getContentProductCart();

view('site/cart', ['products' => $products]);