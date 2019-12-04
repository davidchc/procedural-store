<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	require_once DIR.'app/models/category_model.php';

	$data = [];
	$data['name'] = filter_input(INPUT_POST, 'name');
	$data['description'] = filter_input(INPUT_POST, 'description');
	insertCategory($data);
}

view('admin/categories/add');