<!-- Checando ancestralidade

Para checar a ancestralidade de uma classe utilizamos o operador instanceof
Podemos inserir essa operação em um if, pois vai retornar um booleano;
Exemplo:
$objeto instanceof Humano 
-->

<?php

class Humano {

}

class Animal {

}

class Professor extends Humano{

}



$marcos = new Humano;
$clara = new Animal;

if($marcos instanceof Humano){
  echo "Marcos é um humano. <br>";
} else {
  echo "Marcos não é um humano. <br>";
}

if($clara instanceof Animal){
  echo "Clara é um animal. <br>";
} else {
  echo "Clara não é um animal. <br>";
}

$pedro = new Professor;

if($pedro instanceof Professor){
  echo "Pedro é um professor. <br>";
} else {
  echo "Pedro não é um professor. <br>";
}

if($pedro instanceof Humano){
  echo "Pedro é um humano. <br>";
} else {
  echo "Pedro não é um humano. <br>";
}

if($clara instanceof Professor){
  echo "Clara é um professor. <br>";
} else {
  echo "Clara não é um professor. <br>";
}