<?php

$hostname = 'localhost';
$username = 'root';
$password = 'c4ll$erv12';
$dbname = '16_banco_de_dados';

$conn = new mysqli($hostname, $username, $password, $dbname);

//ASSUNTO DA AULA
$id = 4;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");

$stmt->bind_param("i", $id);

$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_all();

print_r($data);