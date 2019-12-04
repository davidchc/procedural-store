<?php 

require_once DIR.'app/models/category_model.php';

$categories = getCategories();

view('admin/categories/list', ['categories' => $categories]);