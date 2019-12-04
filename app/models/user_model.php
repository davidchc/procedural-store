<?php 

//iNSERIR DADOS NA TABELA DO USUARIOS
function insertUser($data){
	$data['password'] = hash('sha256', $data['password']);
	return dbInsert('users', $data);
}

//UPDATE DADOS NA TABELA DO USUARIOS

function updateUser($data, $id){
	$where = ['id' => $id];
	
	if($data['password']) {
		$data['password'] = hash('sha256', $data['password']);
	} else{
		unset($data['password']);
	}

	return dbUpdate('users', $data, $where);
}

//Retorna todos os usuarios
function getUsers(){
	return dbSelect('users');
}

//Retorna um usuario

function getUser($id){
	$conditions = [];
	$conditions['where'] = ['id' => $id];
	return dbSelect('users', $conditions, false);
}

//exclui usuario
function deleteUser($id){
	$conditions = [];
	$conditions['where'] = ['id' => $id];
	return dbDelete('users', $conditions);
}