<?php

$hostname = 'localhost';
$username = 'root';
$password = 'c4ll$erv12';
$dbname = '16_banco_de_dados';

$conn = new mysqli($hostname, $username, $password, $dbname);

//ASSUNTO DA AULA
$q = "SELECT * FROM itens";

$result = $conn->query($q);

$conn->close();

//UM RESULTADO
$item = $result->fetch_assoc();

//TODOS OS RESULTADOS
$itens = $result->fetch_all();

print_r($itens);

