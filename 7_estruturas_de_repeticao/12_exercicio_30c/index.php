<!-- Exercicio 30c

Crie um array de 10 a 20 com for;
Faça um loop em cima do array criado dinamicamente;
Imprima apenas os números ímpares; -->

<?php

$arr = [];

for($i = 10; $i <= 20; $i++){
    array_push($arr,$i);
}
echo "Novo array: <br>";

print_r($arr);
echo "<br>";
echo "Números ímpares do array: <br>";

$cont = count($arr);

for($j = 0; $j < $cont; $j++) {
    if($arr[$j] % 2 != 0){
        echo "$arr[$j] <br>" ;
        
    }
    
}