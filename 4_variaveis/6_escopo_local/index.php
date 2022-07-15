<!-- Variável local 
-A variável local tem seu escopo definido dentro de uma função;
-Ela não é acessível fora da mesma;
-O seu valor sempre é resetado quando a função é finalizada;
-->

<?php

    $x = 10;
    echo "$x global<br>";

    function teste() {

        $x = 5;
        echo "$x local <br>"; 

    }
    teste();

echo "$x global <br>";

function teste_2(){

    $x = 124;
    echo "$x local 2 <br>";

}

teste_2();
$x = 124;
echo "$x global 2 <br>";

function teste_3() {

    $x = 347634;
    echo "$x local 3 <br>";
}
teste_3();