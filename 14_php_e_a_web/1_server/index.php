<!-- Explorando o $_SERVER
Como dito anteriormente $_SERVER tem diversas informações importantes;
SERVER_SOFTWARE=> Identificação do servidor;
SERVER_NAME => Hostname, DNS ou IP do servidor;
SERVER_PROTOCOL => Protocolo do servidor;
SERVER_PORT => Porta do servidor;
QUERY_STRING => Argumentos após o ? na URL;
 -->

<?php

print_r($_SERVER);

echo "<br> <br>";

echo $_SERVER["DOCUMENT_ROOT"] . "<br>";

if($_SERVER["SERVER_NAME"] == "192.168.1.4") {

  echo "Está acessando o localhost <br>";
}