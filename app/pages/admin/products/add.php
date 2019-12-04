<?php 

require_once DIR.'app/models/category_model.php';
require_once DIR.'app/models/product_model.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

	$data = [];
	$data['name'] = filter_input(INPUT_POST, 'name');
	$data['price'] = filter_input(INPUT_POST, 'price');
	$data['description'] = filter_input(INPUT_POST, 'description');
	$data['category_id'] = filter_input(INPUT_POST, 'category_id');
	
	if(is_uploaded_file($_FILES['image']['tmp_name'])){
		$image = $_FILES['image']['name'];
		$destination = DIR.'uploads/'.$image;
		move_uploaded_file($_FILES['image']['tmp_name'], $destination);
		$data['image'] = $image;
	}

	insertProduct($data);
 
}



$categories = getCategories();

view('admin/products/add', ['categories' => $categories]);