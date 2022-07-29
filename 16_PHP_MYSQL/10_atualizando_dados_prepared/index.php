<?php

$hostname = 'localhost';
$username = 'root';
$password = 'c4ll$erv12';
$dbname = '16_banco_de_dados';

$conn = new mysqli($hostname, $username, $password, $dbname);

//ASSUNTO DA AULA

$id = 8;

$stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

$nome = "Sofá";
$descricao = "Sofá semi novo, com madeira de demolição";

$stmt->bind_param("ssi", $nome, $descricao, $id);

$stmt->execute();

if($stmt->error) {
  echo "Erro: " . $stmt->error;
}