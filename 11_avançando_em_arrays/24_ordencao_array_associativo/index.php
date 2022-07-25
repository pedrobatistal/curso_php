<?php

$arr = [
    "Pedro" => 24,
    "Maria" => 21,
    "Matheus" => 29,
    "Joaquim" => 53
];

asort($arr);

print_r($arr);
echo "<br>";

$arr2 = [
    "Pedro" => 24,
    "Maria" => 21,
    "Matheus" => 29,
    "Joaquim" => 53
];

arsort($arr2);

print_r($arr2);
echo "<br>";

ksort($arr2);

print_r($arr2);
echo "<br>";

krsort($arr2);

print_r($arr2);
echo "<br>";



// asort ordena os arrays associativos em ordem crescente de acordo com seus values.
// arsort faz o contrario.

//ksort ordem crescente pelas keys
//krsort ordem decrescente pelas keys.