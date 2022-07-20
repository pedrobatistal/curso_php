<!-- Exercício 34

Crie uma função que verifica se um número é par ou ímpar;
Se for par imprima uma mensagem;
Se for ímpar imprima uma mensagem; -->

<?php

function parOuImpar ($x) {
    if ($x % 2 == 0) {
        echo "$x é par. <br>";
    } else {
        echo "$x é impar. <br>";
    }
}

parOuImpar(2);
parOuImpar(523);
parOuImpar(546);
parOuImpar(87324);