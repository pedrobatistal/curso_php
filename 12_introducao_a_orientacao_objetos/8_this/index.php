<!-- conhecendo o $this

O $this se refere a instância atual do objeto;
Podendo assim alterar um valor de uma propriedade do objeto com:
$this -> propriedade = "x";
Tradução literal = este;
Podemos invocar um método do objeto com o this também;
-->

<?php

class Animal{
  public $nome;

  function escolherNome($nome) {
    $this->nome = $nome; //"O nome deste objeto é o nome que vem do parâmetro da função"
  }
  function latir() {
    return "Au au <br>";
  }
  function latirForte(){
    return strtoupper($this->latir());
  }
}

$clara = new Animal;

echo "O nome do animal é: $clara->nome <br>"; //Nesse ponto do código o nome do animal ainda não foi escolhido

$clara -> escolherNome("Clara");

echo "O nome do animal é: $clara->nome <br>"; //Nesse ponto ja foi definido.

echo $clara -> latir();

echo $clara -> latirForte();