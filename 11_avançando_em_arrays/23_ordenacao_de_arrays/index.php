<?php

$arr = [2, 23, 52, 23, 23,5, 57,47, 4, 57, 457];

sort ($arr);

print_r($arr);
echo "<br>";

$arr2 = [2, 23, 52, 23, 23,5, 57,47, 4, 57, 457];

rsort($arr2);

print_r($arr2);
echo "<br>";

$nomes = ["Maria", "Aron", "João", "José", "Pedro"];

sort($nomes);

print_r($nomes);
echo "<br>";

//o metodo sort ordena os arrays em ordem alfabetica / crescente. 
//o metodo rsort faz o contrario, ordena em ordem decrescente.
