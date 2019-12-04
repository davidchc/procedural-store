<?php 

/*CONNECTA AO BANCO DE DADOS*/

function dbConnetion(){
	static $conn = null; 

	if(!$conn){
		$conn = new PDO(DB_DNS, DB_USER, DB_PASS);
	}
	return $conn;
}

//ABSTRAÇÃO PRA INSERIR DADOS NA TABELA

function dbInsert($table, $data){
	
	$dataField = dbFieldsPlaceholder($data);
	$fields = $dataField['fields'];
	$results = $dataField['values'];

	$sql = "INSERT INTO {$table} SET ".implode(", ", $fields);

	$pdo = dbConnetion();
	$stmt = $pdo->prepare($sql);

	if(!$stmt->execute($results)) {
		return false;
	}

	return $pdo->lastInsertId();
}

//ABSTRAÇÃO PRA ALTERAR DADOS NA TABELA

function dbUpdate($table, $data, $where){

	$results = [];
	$fields  = [];
	$criteria = [];

	$dataField = dbFieldsPlaceholder($data);
	$fields = $dataField['fields'];
	$results = $dataField['values'];

	$dataWhere = dbFieldsPlaceholder($where);
	$criteria = $dataWhere['fields'];
	$results = array_merge($results, $dataWhere['values']);	

	$sql = "UPDATE {$table} SET ".implode(", ", $fields);
	$sql .= " WHERE ".implode(" AND ", $criteria);

	$pdo = dbConnetion();
	$stmt = $pdo->prepare($sql);
	return $stmt->execute($results);

}

//ABSTRAÇÃO PRA EXCLUIR DADOS NA TABELA


function dbDelete($table, $where){
	$response = dbFieldsPlaceholder($where);
	$criteria = $response['fields'];
  	$results = $response['values'];
	$sql = "DELETE FROM {$table} WHERE ".implode(" AND ", $criteria);
}


//ABSTRAÇÃO PRA RETORNA DADOS NA TABELA


function dbSelect($table, $conditions=[], $all=true){

	$results = [];
	$criteria = [];

  if(isset($conditions['where'])) {
  		$where = dbFieldsPlaceholder($conditions['where']);
  		$criteria = $where['fields'];
  		$results = $where['values'];
	}

	$sql  = "SELECT * FROM {$table} ";
	$sql .=  isset($conditions['where']) ? " WHERE ".implode(" AND ", $criteria) : " "; 
	$sql .=  isset($conditions['order']) ? " ORDER BY ".$conditions['order'] : " "; 
	$sql .=  isset($conditions['limit']) ? " LIMIT ".$conditions['limit'] : " "; 

	return dbFetch($sql, $results, $all);
}

/**
* fUNÇÃO PRA RETORNAR UM SQL
*/
function dbFetch($sql, $data, $all=true){
	$pdo = dbConnetion();
	$stmt = $pdo->prepare($sql);
	$stmt->execute($data);
	if($all) {
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	return $stmt->fetch(PDO::FETCH_ASSOC);
}

/*
FUNÇÃO QUE CRIAR PLACEHOLDER PARA statements
*/
function dbFieldsPlaceholder($data){
	$fields = [];
	$results = [];

	foreach($data as $field => $value){
		$fields[] = " {$field} = ? ";
		$results[] = $value;
	}

	return ['fields' => $fields, 'values' => $results];

}














