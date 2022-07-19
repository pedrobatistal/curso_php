<!-- Exercício 27

Crie um array com alguns valores (pelo menos 10) de tipo de dados diferentes;
Faça um loop while para exibir apenas os dados que são strings; -->

<?php

$lista = [214, 5, "arawr",[],"kmgskmgskmk",true,true,true,false,true,false,12124.12,"agora vai"," "];
$x = count($lista);
$z = 0;

while ($z < $x) {

    if (is_string($lista[$z])){
        echo $lista[$z] . "<br>";
    }
    $z++;
}

$arr = [5, "Matheus", true, false, "Opa", 12.8, "Teste", true, [], "Palavra", 5, 10, "Alô"];

$x = count($arr);
$y = 0;

while($y < $x) {

    if(is_string($arr[$y])) {
        echo $arr[$y] . "<br>";
    }

    $y++;
}