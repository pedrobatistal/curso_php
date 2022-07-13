<?php

class Pessoa{

    function falar () {
        echo "Olá pessoal!";
    }
}

$pedro = new Pessoa;

$pedro -> nome = "Pedro";

echo $pedro -> nome;
echo "<br>";
$pedro -> falar();

// --------------------

class Carro{
    function acelerar() {

        echo "vrummm";
    }
    
}

$rb18 = new Carro;

$rb18 -> $scuderia -> redbull;
echo "<br>";
$rb18 -> acelerar();