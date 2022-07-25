<!-- Classes abstratas

As classes abstratas não podem ser instanciadas;
Podemos ter métodos astratos, que devem ser implementados obrigatoriamente se uma classe herdar a abstrata;
A palavra reservada tanto para classes como para métodos é abstract;
Exemplo:
abstract class ClasseAbstrata{}
-->

<?php

abstract class Teste {

  public static function testandoClasse(){
    echo "Este método é de uma classe abstrata <br>";

  }

  abstract public function testeAbs();
}

// $t = new Teste;  NÃO PODE INSTANCIAR CLASSES ABSTRATAS

Teste::testandoClasse();

class Nova extends Teste {

  public function testeAbs() {
    echo "Teste método abstrato <br>";
  }
}

$n = new Nova;
$n -> testeAbs();
