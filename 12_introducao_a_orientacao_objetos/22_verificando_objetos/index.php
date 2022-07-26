<!-- Verificando objetos

Em PHP temos alguns métodos que nos ajudam a entender melhor os objetos;

is_object() => verifica se uma variável é um objeto;
get_class() => verifica a classe de um objeto;
method_exists() => verifica se um método existe em um objeto;
--> 

<?php

class Humano {

    public function falar(){
        echo "Olá <br>";
    }
}

$pedro = new Humano;

if(is_object($pedro)){
    echo "É um objeto <br>";
} else {
    echo "Não é um objeto <br>";
}

echo get_class($pedro) . "<br>";

if(method_exists($pedro, "falar")){
    echo "O método existe <br>";
} else {
    echo "O método não existe <br>";
}

if(method_exists($pedro, "gaafr")){
    echo "O método existe <br>";
} else {
    echo "O método não existe <br>";
}