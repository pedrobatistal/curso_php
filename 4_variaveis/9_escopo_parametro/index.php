<!-- Parâmetros de função

Os parâmetros de função também são considerados tipos de variáveis;
Este recurso nos ajuda a criar funções com valores dinâmicos;
Podendo alterá-los a cada invocação da mesma;
Podemos passar mais de um parâmetro para uma função. -->

<?php

    function soma($a,$b) {

        echo $a + $b;
        echo"<br>";


    }

soma(2,4);
soma(4,6);
soma(124,6265);

function multiplicacao($c,$d) {
    $e = $c * $d; 
    echo "$c x $d = $e";
    echo"<br>";
}

multiplicacao(2,3);
multiplicacao(5,5);
multiplicacao(23523,352632);