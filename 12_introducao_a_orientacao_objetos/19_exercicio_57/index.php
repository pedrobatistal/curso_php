<!-- Exercício 57

Crie uma classe Cachorro com propriedades;
Inicie as propriedades via constructor;
Crie um método para exibir cada uma das propriedades que você criou. --> 

<?php

class Cachorro {
    public $raca;
    public $peso;
    public $pelos;



function __construct($raca, $peso, $pelos){
    $this-> raca = $raca;
    $this-> peso = $peso;
    $this-> pelos = $pelos;
    }

    public function exibirAnimal($nome) {

        echo "$nome é da raça $this->raca, tem o peso de $this->peso e tem pêlos $this->pelos <br>";
    }
}

$clara = new Cachorro("Bulldog Francês", "15kg", "curtos");

$clara->exibirAnimal("Clara");

$jose = new Cachorro("Pinscher", "0,2kg", "curtos");

$jose->exibirAnimal("José");
