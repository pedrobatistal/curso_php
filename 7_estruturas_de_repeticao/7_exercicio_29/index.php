<!-- Exercicio 29

Crie um array com valores inteiros de 10 a 100, com incremento de 10;
Aplique um loop neste array;
Quando entrar os valores 20 ou 40, pule para a proxima execução. -->

<?php

$array = [10,20,30,40,50,60,70,80,90,100];

$cont = count($array);
$y = 0;

while ($y < $cont) {
    
    

    if($array[$y] == 30 || $array[$y] == 40){

        echo "Pulando $array[$y] <br>";
        $y++;
        continue;
    }
    echo "Elemento: $array[$y]  <br>";
    $y++;
}