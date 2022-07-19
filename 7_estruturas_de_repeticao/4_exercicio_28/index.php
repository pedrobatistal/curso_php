<!-- Exercício 28
Crie um loop que vai até o número 30;
O contador deve iniciar como 4;
Faça incrementos de 2 em 2 no contador;
Utilize o break para parar o loop quando chegar no número 24; -->

<?php

$cont = 4;
$limite = 30;

while ($x < $limite){

    echo "O X é $cont <br>";

    if($cont === 24){
        echo "Terminando o loop <br>";
        break;
    }
    $cont += 2;
}

echo "Fim do programa";