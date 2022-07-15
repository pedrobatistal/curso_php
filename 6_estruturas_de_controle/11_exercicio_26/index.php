<!-- Exercício 26 

Crie uma variável que recebe uma velocidade de um carro;
Depois crie uma estrutura if que verifica essa velocidade;
Se a velocidade for menor que 40, imprima que o motorista está na velocidade correta;
Se igual a 40, imprima uma mensagem para o motorista tomar cuidado;
Se for maior que 40, imprima uma mensagem de multa. -->

<?php

$velCarro = 30;
$velCarro2 = 40;
$velCarro3 = 50;
$velMaxPermitida = 40;
$msg1 = "Você está na velocidade correta <br>";
$msg2 = "Tome cuidado!!! <br>";
$msg3 = "Você foi multado <br>";

if ($velCarro < $velMaxPermitida) {
    echo $msg1;    
}else if ($velCarro == $velMaxPermitida){
    echo $msg2;
}else 
    echo $msg3;

if ($velCarro2 < $velMaxPermitida) {
    echo $msg1;    
}else if ($velCarro2 == $velMaxPermitida){
    echo $msg2;
}else 
    echo $msg3;

if ($velCarro3 < $velMaxPermitida) {
    echo $msg1;    
}else if ($velCarro3 == $velMaxPermitida){
    echo $msg2;
}else 
    echo $msg3;
