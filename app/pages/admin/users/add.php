<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	require_once DIR.'app/models/user_model.php';

	$data = [];
	$data['name'] = filter_input(INPUT_POST, 'name');
	$data['email'] = filter_input(INPUT_POST, 'email');
	$data['password'] = filter_input(INPUT_POST, 'password');

	insertUser($data);
 
}

view('admin/users/add', ['title' => 'Ola mundo']);