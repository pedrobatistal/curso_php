<?php

$carro =[
    "marca" => "BMW",
    "motor" => "2.4",
    "teto_solar" => true,
    "cambio" => "manual",
    "portas" => 4
];

$chaves = array_keys($carro);

print_r($chaves);
echo "<br>";

$valores = array_values($carro);

print_r($valores);
echo "<br>";

// transformando os valores a partir da função array_values, podemos fazer um loop imprimindo cada um de seus valores, por exemplo.