<!-- Exercício 32b
Crie uma função;
Defina uma variável nome e sobrenome;
Imprima os valores concatenados; -->

<?php

function nomeCompleto() {

    $nome = "Pedro ";
    $sobrenome = "Batista ";

    $nomeCompleto = $nome . $sobrenome;

    echo $nomeCompleto . "<br>";
}

nomeCompleto();