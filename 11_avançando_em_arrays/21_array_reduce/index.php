<?php

$arr = [1, 2, 3, 19, 234, 12, 42, 12, 4];

function soma($a,$b) {
    return $a + $b;
}

function subtracao($a,$b) {
    return $a - $b;
}

$resultado = array_reduce($arr, "soma");

echo "$resultado <br>";

$resultado2 = array_reduce($arr, "subtracao");

echo "$resultado2 <br>";

// o array reduce vai executar de dois em dois, sendo que o primeiro será sempre a soma do atual com o resultado anterior.