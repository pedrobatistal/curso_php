<?php

if(5 > 10 && 10 > 5) { // false e true
    echo "Entrou no if 1 <br>";
}

if(50 > 10 && 10 > 5) { // true e true
    echo "Entrou no if 2 <br>";
}

if (50 > 10 && 10 > 500) { // true e false
    echo "Entrou no if 3 <br>";
}

if (12 > 10 && 9 > 2954) { // false e false
    echo "Entrou no if 4 <br>";
}

// é possivel fazer comparações com variáveis também!!! 

$a = 4;
$b = 53;
$c = 4;

if ($b > $a && $a == $c) {
    echo "Entrou no if 5.";
}