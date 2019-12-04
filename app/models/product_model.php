<?php 

//iNSERIR DADOS NA TABELA DO PRODUTOS
function insertProduct($data){
	return dbInsert('products', $data);
}

//UPDATE DADOS NA TABELA DO PRODUTOS

function updateProduct($data, $id){
	$where = ['id' => $id];
	return dbUpdate('products', $data, $where);
}

//Retorna todos os PRODUTOS
function getProducts(){
	return dbSelect('products');
}

//Retorna um PRODUTO

function getProduct($id){
	$conditions = [];
	$conditions['where'] = ['id' => $id];
	return dbSelect('products', $conditions, false);
}

//exclui PRODUTO
function deleteProduct($id){
	$conditions = [];
	$conditions['where'] = ['id' => $id];
	return dbDelete('products', $conditions);
}

function getProductsByIds(array $ids) {

	$sql = "SELECT * FROM products WHERE id IN (".$ids.")";

	$conditions = [];
	$conditions['where_in'] = ['id' => $ids];
	return dbSelect('products', $conditions, true);
}