<!-- Exercício 12

-Crie um arquivo PHP;
-Crie uma operação com cada um dos operadores básicos;
-Cada operação deve estar em uma variável diferente;
-Imprima cada uma das etapas;
-Ex: soma -> multiplicacao -> divisao -> subtração; -->

<?php

$a = 32;
$b = 43;
$c = 23;
$d = 43;
$e = 98;
$f = 68;
$g = 89;
$h = 7;


$soma = $a + $b;
$subtracao = $c - $d;
$multiplicacao = $e * $f;
$divisao = $g / $h;

echo "$soma = $a + $b <br>";
echo "$subtracao = $c - $d <br>";
echo "$multiplicacao = $e x $f <br>";
echo "$divisao = $g / $h <br>";

echo "----------------<br>";

$op1 = $a - $b;
echo "$op1 <br>";

$op2 = $op1 / $c;
echo "$op2 <br>";

$op3 = $op2 * $d;
echo "$op3 <br>";

$op4 = $op3 + $e;
echo "$op4 <br>";
