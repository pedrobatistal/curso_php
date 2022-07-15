<?php

$x = 0;

switch($x) {
    case 0:
        echo "x é igual a 0 <br>";
        break; // break faz pular as outras analises, inclusive o default
    case 1:
        echo "x é igual a 1 <br>";
        break;
    default:
        echo "X não é igual a nenhum dos valores mencionados <br>";
}

// o bloco será executado ate encontrar uma comparação verdadeira ou até o break.

$y = "Pedro";

switch($y) {
    case "Pedro":
        echo "O nome é Pedro <br>";
        break;
    case "victor":
        echo "O nome é Victor <br>";
        break;
    default:
        echo "O nome não foi encontrado <br>";
}

$z = Victor;

switch($z) {
    case "Pedro":
        echo "O nome é Pedro <br>";
        break;
    case "Victor":
        echo "O nome é Victor <br>";
        break;
    default:
        echo "O nome não foi encontrado <br>";
}