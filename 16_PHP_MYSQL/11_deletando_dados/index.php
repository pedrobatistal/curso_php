<?php

$hostname = 'localhost';
$username = 'root';
$password = 'c4ll$erv12';
$dbname = '16_banco_de_dados';

$conn = new mysqli($hostname, $username, $password, $dbname);

//ASSUNTO DA AULA
$nome = "Abajur";

$stmt = $conn->prepare("DELETE FROM itens WHERE nome = ?");

$stmt->bind_param("s",$nome);

$stmt->execute();

$conn->close();