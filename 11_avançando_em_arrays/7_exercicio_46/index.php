<!-- Exercício 46

Crie um array multidimensional com 3 arrays que tem 4 elementos cada;
Imprima todos os elementos de cada um dos arrays;
Imprima também quando está mudando de array; -->

<?php

$array = [
  range(2,5),
  ["afga", 123, "huija", 3],  
  range(18,100,22)
];

// loop no array externo 
for($i = 0; $i < count($array); $i++) {

  //imprimindo array
  echo "Imprimindo array externo: " . ($i + 1) . "<br>";

  //imprimindo o array interno
  for($j = 0; $j < count($array[$i]); $j++) {
    echo $array[$i][$j] . "<br>";

  }

}