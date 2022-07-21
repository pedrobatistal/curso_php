<?php

$frase = "Testando o explode";

$fraseArray = explode(" ", $frase);

print_r($fraseArray);
echo "<br>";

$fraseArray = explode(",", $frase); //Em $frase não contem nenhuma vírgula, portanto o separador nao será encontrado, fazendo com que a string fique junta.

print_r($fraseArray);
echo "<br>";

$fraseB = "Carro, Avião, Barco, Navio";

$fraseBArray = explode (",", $fraseB);

print_r($fraseBArray);
echo "<br>";

for($i = 0; $i < count($fraseBArray); $i++) {

    echo "$fraseBArray[$i] <br>";
}