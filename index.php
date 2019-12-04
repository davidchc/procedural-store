<?php 

require_once "config/bootstrap.php";
define('DIR', __DIR__.'/');

$page = isset($_GET['page']) && $_GET['page'] ? $_GET['page'] : 'home';

$fileCurrent = getRouterFile($page, [
		'site/home' => 'app/pages/site/home.php',
		'site/produtos' => 'app/pages/site/products.php',
		'site/carrinho' => 'app/pages/site/cart.php',
		'site/checkout' => 'app/pages/site/checkout.php',

		'admin/users' => 'app/pages/admin/users/list.php',
		'admin/user/add' => 'app/pages/admin/users/add.php',
		'admin/user/edit' => 'app/pages/admin/users/edit.php',
		'admin/user/delete' => 'app/pages/admin/users/delete.php',

		'admin/products' => 'app/pages/admin/products/list.php',
		'admin/product/add' => 'app/pages/admin/products/add.php',
		'admin/product/edit' => 'app/pages/admin/products/edit.php',
		'admin/product/delete' => 'app/pages/admin/products/delete.php',

		'admin/categories' => 'app/pages/admin/categories/list.php',
		'admin/category/add' => 'app/pages/admin/categories/add.php',
		'admin/category/edit' => 'app/pages/admin/categories/edit.php',
		'admin/category/delete' => 'app/pages/admin/categories/delete.php',

		'admin/orders' => 'app/pages/admin/orders/list.php',
		
]);

if($fileCurrent){
	require_once $fileCurrent;
}

