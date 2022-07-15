<!-- Exercício 24
Crie algumas variáveis com tipos de dados diferentes: string, int e boolean, por exemplo;
Cheque se a variável é um inteiro;
Caso sim, apresente uma mensagem confirmando o tipo de dado;
Caso não, apresente outra mensagem; -->

<?php

$nome = "Pedro";
$idade = 24;
$estuda = true;
$lista = [a,b,c,d];
$msg1 = "É um inteiro";
$msg2 = "Não é um inteiro";

if (is_int($nome)) {
    echo "$msg1 1 <br>";
} else {
    echo "$msg2 1 <br>";
}

if (is_int($idade)) {
    echo "$msg1 2 <br>";
} else {
    echo "$msg2 2 <br>";
}

if (is_int($estuda)) {
    echo "$msg1 3 <br>";
} else {
    echo "$msg2 3 <br>";
}

if (is_int($lista)) {
    echo "$msg1 4 <br>";
} else {
    echo "$msg2 4 <br>";
}