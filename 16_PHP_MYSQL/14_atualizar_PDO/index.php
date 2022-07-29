<<?php

$host = 'localhost';
$db = '16_banco_de_dados';
$user = 'root';
$pass = 'c4ll$erv12';

$conn = new PDO("mysql:host=$host,dbname=$db", $user, $pass);

//ASSUNTO DA AULA
$id = 5;
$nome = "Teclado Microsoft";
$descricao = "Este teclado é novo e está na caixa";

$stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();