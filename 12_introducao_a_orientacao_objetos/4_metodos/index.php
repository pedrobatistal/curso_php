<!-- Declarando métodos

Para declarar um método vamos utilizar a sintaxe de function, porém dentro de uma class;
O restante é exatamente igual a sintaxe de função;
Podemos retornar ou imprimir dados, dependendo da nossa regra de negoócios;
-->

<?php

class Pessoa {

  function falar(){
    echo "Olá, eu so um objeto! <br>";
  }

  function somar($x,$y){
    echo $x + $y . "<br>";
  }
}

$pedro = new Pessoa;

$pedro -> falar();
$pedro -> falar();

$maria = new Pessoa;

$maria -> falar();

$pedro -> somar(1,1);
$maria -> somar(2,2);