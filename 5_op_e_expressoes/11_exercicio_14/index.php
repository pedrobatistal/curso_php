<!-- Exercício 14

Crie um arquivo PHP;
Crie uma variável saudação, nome e outra de sobrenome;
Imprima com echo a concatenação de saudação, nome e sobrenome. -->

<?php

$saudacao = "Sr(a) ";
$nome = "Pedro";
$sobrenome = "Batista";

$bomDia = "Bom dia, " . $saudacao . " " . $nome . " " . $sobrenome . "!!!";

echo $bomDia;