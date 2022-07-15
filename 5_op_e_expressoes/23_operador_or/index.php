<?php

if (5>2 || 3<4) { // true e true
    echo "entrou no if 1 <br>";
}

if ("a" != "b" || "c" == "d"){ // true e false
    echo "entrou no if 2 <br>";
}

if (543 < 1 || 1234 == "a"){ // false e false
    echo "entrou no if 3 <br>";
}

if ("abacate" == "limao" || 30 == 30){ // false e true
    echo "entrou no if 4 <br>";
}

// Para o "OR", é necessário que somente uma comparação seja verdadeira.
// Também funciona com variáveis!!!!

$a = 21;
$b = 42;
$c = 21;

if ($a == $b || $a == $c){
    echo "entrou no if 5";
}