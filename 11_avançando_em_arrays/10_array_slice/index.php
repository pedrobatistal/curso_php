<?php

$arr = [2, 4, 6, 8, 10 , 12, 14, 16, 18];

$slice1 = array_slice($arr, 1 ,3);

print_r($slice1);
echo "<br>";

$slice2 = array_slice($arr, 4, 4); //array escolhido, indice de inicio (lembrando que começa do zero) e quantos elementos serão incluidos a partir do inicio.

print_r($slice2);
echo "<br>";

$slice3 = array_slice($arr, 4); //omitindo um parâmetro, ele ira pegar todos os elementos a partir do parâmetro de início.

print_r($slice3);
echo "<br>";

$slice4 = array_slice($arr, 4, -3);  //o ultimo parâmetro diz quantos elementos serão excluídos de trás para frente.

print_r($slice4);
echo "<br>";
