<!--Exercício 49

Crie variáveis com características de algum objeto ou animal;
Depois crie um array com compact com estas mesmas variáveis;
Faça um loop no array e imprima valores;-->

<?php

$corPelo = "branco";
$corOlho = "azul";
$porte = "pequeno";
$familia = "felinos";
$mia = true;

$gato = compact("corPelo", "corOlho", "porte", "familia", "mia");

//print_r($gato);

foreach($gato as $caracteristica => $value) {

    echo "$caracteristica: $value <br>";
}