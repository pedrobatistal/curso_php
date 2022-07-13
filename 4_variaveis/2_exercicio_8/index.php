<!-- Exercício 8 
Crie um arquivo PHP que tenha três variáveis com três tipos de dados diferentes.
Imprima estas variáveis. -->

<?php

$_nomeCidade = "Aguas Claras"; // string
$siglaEstado = "DF"; //string
$cidadeExiste = true; //bool
$raioCidade = 22; //int
$cidadesProximas = ["Taguatinga", "Guará", "Arniqueiras"]; //array


echo $_nomeCidade . "<br>";
echo $siglaEstado . "<br>";
echo $cidadeExiste . "<br>";
echo $raioCidade . "<br>";
echo $cidadesProximas."<br>";
print_r($cidadesProximas);


