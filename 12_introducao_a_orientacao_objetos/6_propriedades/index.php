<!-- Declarando propriedades

Para declarar propriedades vamos basicamente criar uma variável dentro de uma class;
Porém precisamos definir a sua privacidade, como por exemplo public;
Uma propriedade pública pode ser acessada fora do escopo do objeto;
Exemplo:
public $idade = 24; -->

<?php

class Car {

  public $rodas;
  public $aro = 20;
  public $cor = "vermelha";

  function ligar() {
    echo "Vrummm";
  }
}

$ferrari = new Car;

$ferrari -> rodas = 3;

echo $ferrari -> rodas . "<br>";
echo $ferrari -> aro . "<br>";

echo $ferrari -> cor = "Verde" . "<br>";

$ferrari -> ligar();