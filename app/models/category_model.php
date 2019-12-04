<?php 

//iNSERIR DADOS NA TABELA DO USUARIOS
function insertCategory($data){
	return dbInsert('categories', $data);
}

//UPDATE DADOS NA TABELA DO USUARIOS

function updateUser($data, $id){
	$where = ['id' => $id];
	return dbUpdate('categories', $data, $where);
}

//Retorna todos os usuarios
function getCategories(){
	return dbSelect('categories');
}

//Retorna um usuario

function getCategory($id){
	$conditions = [];
	$conditions['where'] = ['id' => $id];
	return dbSelect('categories', $conditions, false);
}

//exclui usuario
function deleteCategory($id){
	$conditions = [];
	$conditions['where'] = ['id' => $id];
	return dbDelete('categories', $conditions);
}