<?php

if(5 > 2) {
    echo "Entrou no if <br>";
} else {
    echo "Entrou no else <br>";
}

if (10==9){
    echo "Entrou no if 2 <br>";
} else {
    echo "Entrou no else 2 <br>";
}


// variáveis

$a = 212;
$b = 432;
$msg = "Não entrou no if";

if ($a > $b) {
    echo "Entrou no if 3 <br>";
} else{ 
    echo "$msg <br>";
}

if ($a < $b) {
    echo "Entrou no if 4 <br>";
} else {
    echo "$msg 4 <br>";
}