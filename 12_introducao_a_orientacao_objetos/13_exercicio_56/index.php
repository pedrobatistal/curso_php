<!-- Exercicio 56
Crie uma classe Humano com algumas propriedades e o método falar;
Crie uma outra classe Professor que herda de humano, crie também as propriedades e métodos particulares desta classe;
Exiba os valores das propriedades da classe pai e tambem utilize os métodos; -->

<?php

class Humano {
  public $olhos = "verde";
  public $altura = "187cm";
  public $peso = "90kg";

  public function falar(){
    echo "Olá, eu sou um humano! <br>";
  }
}

class Professor extends Humano{
  public $graduacao = "Matematica";
  public $escola = "Colégio bla bla bla";

  function fazerChamada(){
    echo "O professor está fazendo a chamada na escola $this->escola <br>";
  }
};

$pedro = new Professor;

echo $pedro -> olhos . "<br>";
echo $pedro -> altura . "<br>";
echo $pedro -> peso . "<br>";

$pedro -> falar();
$pedro -> fazerChamada();
