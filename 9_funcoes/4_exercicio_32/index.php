<!-- Exercício 32 

Crie uma função;
Define três variáveis numéricas dentro dela;
Exiba a multiplicação destes números com um echo; -->

<?php

function multi(){

    $x = 3;
    $y = 2;
    $z = 7;

    $result = $x * $y * $z;

    echo $result . "<br>";
}

multi();