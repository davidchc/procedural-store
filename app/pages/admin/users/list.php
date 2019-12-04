<?php 

require_once DIR.'app/models/user_model.php';

$users = getUsers();

view('admin/users/list', ['users' => $users]);