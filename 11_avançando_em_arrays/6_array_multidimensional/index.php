<?php

$arr = [
  [1,2,3],
  [2,4,6],
];

print_r($arr);
echo "<br>";

echo $arr[0][1] . "<br>"; // Acessando o primeiro array, e segundo elemento.
echo $arr[1][2] . "<br>";

echo count($arr) . "<br>";
echo count($arr[1]) . "<br>";