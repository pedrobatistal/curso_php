<?php

$hostname = 'localhost';
$username = 'root';
$password = 'c4ll$erv12';
$dbname = '16_banco_de_dados';

$conn = new mysqli($hostname, $username, $password, $dbname);

//ASSUNTO DA AULA

$sql = "SELECT * FROM itens";

$result = $conn->query($sql);

print_r($result);

$conn->close();