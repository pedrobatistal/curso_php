<!-- Classes anônimas

As classes anônimas são criadas em uma variável e não possuem nome;
Elas funcionam como qualquer outra classe;
Precisamos fechar ela com ";"
Exemplo:
$anonima = new Class(){}; 
--> 

<?php

$pessoa = new class(){

    public $nome = "Pedro";

    public function dizerNOme() {
        echo "Olá, meu nome é $this->nome <br>";
    }
};

echo $pessoa->nome . "<br>";

$pessoa->dizerNome();