<?php

try{

	$pdo = new PDO('mysql:host=127.0.0.1; dbname=testdb','root', '');
}catch(PDOException $e) {
	die($e->getMessage());
}

$statement = $pdo->prepare('select * from books');

     $statement-> execute();

$results = $statement->fetchAll(PDO::FETCH_OBJ);

