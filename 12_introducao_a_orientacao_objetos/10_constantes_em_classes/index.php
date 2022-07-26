<!-- Constantes em classes

As constantes são parecidas com variáveis, salvam vallores em memória;
Porém o seu valor não pode ser alterado;
Exemplo de sintaxe:

public const CHAVE_API = "ASO793mJJs39"; --> 

<?php

class Humano {

  public const OLHOS = 2; //a constante é declarada sem cifrão
  public const BRACOS = 2;
  public const PERNAS = 2;

  function mostrarConstante(){
    
    echo self::BRACOS . "<br>"; //inves de usar o $this, para acessar constantes utilizamos a palavra reservada self
    
  }
}

$pedro = new Humano;
echo $pedro::OLHOS . "<br>";

$pedro -> mostrarConstante();