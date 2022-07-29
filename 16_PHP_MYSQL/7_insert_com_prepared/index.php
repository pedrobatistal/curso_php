<?php

$hostname = 'localhost';
$username = 'root';
$password = 'c4ll$erv12';
$dbname = '16_banco_de_dados';

$conn = new mysqli($hostname, $username, $password, $dbname);

//ASSUNTO DA AULA
$nome = "Suporte de microfone";
$descricao = "O suport é novo e foi fabricado na China";

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?,?)");

$stmt ->bind_param("ss", $nome, $descricao); //s - string, i - integer, d - double

$stmt->execute();