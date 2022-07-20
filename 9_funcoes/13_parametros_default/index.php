<!-- Parâmetros default

Podemos passar parâmetros que já possuem um valor pré-determinado;
Então caso você não passe este parâmetro, o valor default entra em cena;
A funçõa será executadonormalmente com o valor definido;

function teste($a = "padrão"){
    // código
} -->

<?php

function teste($a = "teste") {

    echo "O valor de A é: $a <br>";
}

teste();
teste("asd");

function testando($b, $a = "x") { // uma boa prática é colocar os valores default sempre por último.

    echo "O valor de a é: $a e de b é: $b <br>";
}

testando("1");
testando("1", "2");