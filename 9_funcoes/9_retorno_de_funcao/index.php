<!-- Retorno de funções

Normalmente funções retornam algo, para isso utilizarmos a instrução "return";
O objetivo é armazenar o valor de retorno em uma variável e utilizá-lo posteriormente no código;
É pegar o resultado da função (escopo local) para ser usado no código todo (escopo global);

function x(a,b){
    return algumaCoisa;
} -->

<?php

function soma($n1,$n2) {

    return $n1 + $n2;

}

echo soma(4,4) . "<br>";

$x = soma(2,4);

echo $x. "<br>";

$y = soma($x,19);

echo $y . "<br>";