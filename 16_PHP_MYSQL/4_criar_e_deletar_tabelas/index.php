<?php

$hostname = 'localhost';
$username = 'root';
$password = 'c4ll$erv12';
$dbname = '16_banco_de_dados';

$conn = new mysqli($hostname, $username, $password, $dbname);

//ASSUNTO DA AULA;
// $q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

$q = "DROP TABLE teste";

$conn->query($q);
$conn->close();