<!-- Exercicio 53
Crie uma classe Cachorro;
Crie o método latir e andar;
Execute o método em novas instâncias da classe;
-->

<?php

class Cachorro {
  function latir($nome) {
    echo "$nome está latindo <br>";
  }

  function andar($nome) {
    echo "$nome está andando <br>";
  }
}

$clara = new Cachorro;

$clara -> latir("Clara");
$clara -> andar("Clara");

$jose = new Cachorro;

$jose -> latir("José");
$jose -> andar("José");