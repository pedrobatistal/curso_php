<?php

$hostname = 'localhost';
$username = 'root';
$password = ''; //retirei a senha para dar erro.
$dbname = '16_banco_de_dados';

$conn = new mysqli($hostname, $username, $password, $dbname);

if($conn->connect_errno) {
  echo "Erro de conexão <br>";
  echo "Erro: " . mysqli_connect_error();
}