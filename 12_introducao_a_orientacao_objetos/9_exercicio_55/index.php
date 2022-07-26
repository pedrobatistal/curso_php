<!-- Exercício 55

Crie uma classe Carro;
Crie algumas propriedades e também a propriedade velocidade_maxima;
Crie o método serVelocidadeMaxima, onde é possível alterar a velocidade máxima do carro;
e também o getVelocidadeMaxima onde é possivel imprimir a velocidade do carro; --> 

<?php

class Carro{
  public $cor;
  public $rodas;
  public $velocidadeMaxima;
  
  function setVelocidadeMaxima($vel){ //a função vai receber uma velocidade que irá definir a velocidade máxima do carro;
    $this-> velocidadeMaxima = $vel;    
  }
  function getVelocidadeMaxima($nome){
        
    echo "A velocidade máxima da $nome é: $this->velocidadeMaxima km/h <br>";
  }
    
}

$bmw = new Carro;

$bmw-> cor = "Branca";
$bmw-> rodas = 4;

$bmw -> setVelocidadeMaxima(300);

$bmw -> getVelocidadeMaxima("bmw");

$ferrari = new Carro;

$ferrari -> setVelocidadeMaxima(330);
$ferrari -> getVelocidadeMaxima("ferrari");