<!-- Exercício 25

Crie variaveis com numeros e outras strings
Faça um if checando se é numero;
Caso for, atribua a multiplicação deste numero por 2 em outra variável;
E crie um outro if, que checa se o novo numero é maior que 100;
Se sim, imprima uma mensagem; -->

<?php

$x = 10;
$y = 60.0;
$nome = "abacate";

if((is_int($x)) || (is_float($x))) {
    echo "$x é um número <br>";
    $x *= 2;
    if($x > 100) {
        echo "$x é maior que 100 <br>";
    } else {
        echo "$x não é maior que 100 <br>";
    }
} else {
    echo "$x não é um número <br>";
}

if((is_int($y)) || (is_float($y))) {
    echo "$y é um número <br>";
    $y *= 2;
    if($y > 100) {
        echo "$y é maior que 100 <br>";
    } else {
        echo "$y não é maior que 100 <br>";
    }
} else {
    echo "$y não é um número <br>";
}

if((is_int($nome)) || (is_float($nome))) {
    echo "$nome é um número <br>";
    $nome *= 2;
    if($nome > 100) {
        echo "$nome é maior que 100 <br>";
    } else {
        echo "$nome não é maior que 100 <br>";
    }
} else {
    echo "$nome não é um número <br>";
}