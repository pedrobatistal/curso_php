<!-- Herança

A herança é o recurso da OOP que dá a possibilidade de uma classe herdar métodos e propriedades de outra;
A palavra reservada é extends;
Exemplo:
class Programador extends Pessoa{
} --> 

<?php

class Humano {
  public $idade = 24;

  public function falar(){
    echo "Olá mundo! <br>";
  }
  private function gritar() {
    echo "PHP É MUITO BOM! <br>";
  }
  public function acessarGritar(){
    $this -> gritar();
  }
  protected function falarBaixinho(){
  echo "lalala <br>";
  }
  public function acessarFalarBaixinho(){
    $this -> falarBaixinho();
  }
}

class Programador extends Humano {

  public function acessarFalarBaixinhoProgramador(){
    $this -> falarBaixinho();
  }

}

$pedro = new Humano;

$pedro -> falar();
$pedro -> acessarGritar();
$pedro -> acessarFalarBaixinho();

$maria = new Programador;

echo $maria -> idade . "<br>";

$maria -> falar();
$maria -> acessarGritar();
$maria -> acessarFalarBaixinho();
$maria -> acessarFalarBaixinhoProgramador();
