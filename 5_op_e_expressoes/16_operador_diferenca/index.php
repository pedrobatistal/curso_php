<?php

$a = 3;
$b = 4;
 
if ($a != $b) {
    echo "Testando a diferença 1 <br>";
}

if ($a != 3) {
    echo "Testando a diferença 2 <br>";
}

if (false != "teste"){
    echo "Testando a diferença 3 <br>";
}

if (3 != "3"){ 
    echo "Testando a diferença 4 <br>"; //podemos verificar que essa mensagem nao será impressa, ja que o operador != não leva em consideração o tipo de dado (string ou int, por exemplo).
}

if (3 != 4){
    echo "Testando a diferença 5 <br>";
}