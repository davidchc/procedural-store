<?php 

require_once DIR.'app/models/product_model.php';

$products = getProducts();

view('admin/products/list', ['products' => $products]);