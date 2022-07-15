<!-- Exercício 23

Complemente o exercício 22;
Insira um else com uma mensagem para as pessoas que são menores de idade; -->

<?php

$idade1 = 12;
$idade2 = 21;
$idade3 = 18;
$maiorIdade = 18;
$msgIf = "A pessoa é maior de idade";
$msgElse = "A pessoa é menor de idade";
if($idade1 >= $maiorIdade){
    echo "$msgIf 1 <br>";
} else {
    echo "$msgElse 1 <br>";
}

if($idade2 >= $maiorIdade){
    echo "$msgIf 2 <br>";
} else {
    echo "$msgElse 2 <br>";
}

if($idade3 >= $maiorIdade) {
    echo "$msgIf 3";
} else {
    echo "$msgElse 3";
}