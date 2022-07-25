<!-- Exercicio 54

Crie uma classe Pessoa;
Crie a propriedade nome e idade;
E também um método andar;
-->

<?php

class Person {
  public $nome = "Pedro";
  public $idade = 24;

  function andar($nome, $m){
    echo "$nome andou $m metros.";
  }

}

$pedro = new Person;
echo $pedro -> nome . "<br>";
echo $pedro -> idade . "<br>";

$pedro -> andar("Pedro",50);


// resolução alternativa:

// echo "<br>";
// echo "<br> Resolução alternativa: <br>";

// class Pessoa {

//   public $nome;
//   public $idade;

//   function andar ($m) {
//     echo "A pessoa andou $m metros <br>";
// }

// }

// $pedro = new Pessoa; 

// $pedro->nome = "Pedro";
// $pedro->idade = 24;

// echo "O nome dele é $pedro->nome e tem $pedro->idade anos <br>";

// $pedro -> andar(20);

// $joaquim = new Pessoa;

// $joaquim -> nome = "joaquim";
// $joaquim -> idade = 32;

// echo "O nome dele é $joaquim->nome e tem $joaquim->idade anos <br>";