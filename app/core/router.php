<?php 

function getRouterFile($page, $routes){

	$prefix = substr($page, 0, 5);

	if($prefix != 'admin'){
		$page = 'site/'.$page;
	}

	if(isset($routes[$page])) {
		$file = $routes[$page];
		return $file;
	}
	
}