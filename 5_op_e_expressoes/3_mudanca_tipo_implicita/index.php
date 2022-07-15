<!-- Mudança do tipo implicita

Significa mudar o tipo de dado de forma "automatica" a partir de alguma operação.
Por exemplo: 5/2 = 2.5; A divisão entre dois inteiros gerou um float. -->

<?php

echo 5/2;
echo"<br>";

if(is_float(5/2)) {

    echo"É float <br>";
}

echo 2 . 3;
echo "<br>";

if(is_string(2 . 3)) {
    echo "É string <br>";
}

$nome = "Pedro";
$sobrenome = "Batista";

$nomeCompleto = $nome . " " . $sobrenome;

echo "Olá, $nomeCompleto!";
echo"<br>";