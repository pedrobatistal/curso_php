<?php

$host = 'localhost';
$db = '16_banco_de_dados';
$user = 'root';
$pass = 'c4ll$erv12';

$conn = new PDO("mysql:host=$host,dbname=$db", $user, $pass);

//ASSUNTO DA AULA
$id = 5;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id> :id");

$stmt->bindParam(":id", $id);

$stmt->execute();

// $data = $stmt->fetch(PDO::FETCH_ASSOC);

// print_r($data);

$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($itens);