<!-- Função mktime
A função mktime recebe em seus parâmetros: hora, minuto, segundo, mês, dia e ano;
Assim podemos criar uma data a partir desta informação;
Exemplo:
$date = mktime(01,18,00,03,12,2000);
echo date("d/m/y", $date);-->

<?php

$dataNascimento = mktime(13, 30, 50, 9, 4, 1997); // hora, minuto, segundo , mes, dia, ano
echo $dataNascimento . "<br>";

$dataNascimentoFormatada = date("d/m/y", $dataNascimento);

echo $dataNascimentoFormatada . "<br>";

$dataEspecifica = mktime(10, 20, 11, 04, 28, 2041);

$dataFuturaFormatada = date("m/d/y", $dataEspecifica);

echo $dataFuturaFormatada . "<br>";