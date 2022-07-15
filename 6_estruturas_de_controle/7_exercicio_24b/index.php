<!-- Exercício 24b
Crie uma variável que recebe um peso;
Caso seja maior que 80, imprima a mensagem que está pesando demais;
Se não, imprima "Peso dentro do limite".  -->

<?php

$peso = 70;
$peso2 = 90;
$peso3 = 80;
$pesoMax = 80;
$msg1 = "Está pesando demais <br>";
$msg2 = "Peso dentro do limite <br>";

if($peso > $pesoMax){
    echo $msg1;
} else {
    echo $msg2;
}

if($peso2 > $pesoMax){
    echo $msg1;
} else {
    echo $msg2;
}

if($peso3 > $pesoMax){
    echo $msg1;
} else {
    echo $msg2;
}

