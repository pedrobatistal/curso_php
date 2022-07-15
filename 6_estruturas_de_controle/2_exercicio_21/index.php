<!-- Exercício 21

Faça as seguintes verificações em estruturas if:
    5 é maior que 2?
    Matheus é diferente de Pedro
    12 é menor ou igual a 11
    -Os valores devem ser inseridos em variáveis!! -->

<?php

$x = 5;
$y = 2;
$name1 = "Matheus";
$name2 = "Pedro";
$n1 = 12;
$n2 = 11;

//if 1
if($x > $y){
    echo "Entrou no if 1 <br>";
}

//if 2
if ($name1 != $name2){
    echo "Entrou no if 2 <br>";
}

//if 3
if($n1 <= $n2){
    echo "Entrou no if 3 <br>";
}