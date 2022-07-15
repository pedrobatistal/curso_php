<?php

if (3==3){
    echo "Comparação verdadeira <br>";
}

if (3==4){
    echo "Comparação verdadeira 2 <br>";
}

$a = 1;
$b = 2;
$c = 1;

if ($a==$b){
    echo "Comparação verdadeira 3 <br>";
}

if ($a==$c){
    echo "Comparação verdadeira 4 <br>";
}

$nome = "Pedro";
$nomeDoSistema = "Pedro";

if($nome == $nomeDoSistema){
    echo "O nome coincide. <br>";
}