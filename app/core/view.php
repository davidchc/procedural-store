<?php 

function view($file, array $data=[]){

	$filename = DIR.'templates/'.$file.'.php';
	if(file_exists($filename)) {
		extract($data);
		require_once $filename;
	}
}