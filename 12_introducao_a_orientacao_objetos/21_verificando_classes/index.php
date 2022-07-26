<!-- Verificando classes

Em PHP temos alguns métodos que nos ajudam a entender as classes:

class_exists() => verifica se uma classe existe;
get_class_methods() => verifica os métodos de uma classe;
get_class_vars() => mapeamento das propriedades de uma classe; --> 

<?php

class Humano {

    public $idade;
    public $nome;
    public $profissao;

    public function falar() {}
    public function andar(){}

}

if (class_exists("Humano")) {
    echo "A classe existe <br>";
}

if(class_exists("Cachorro")){
    echo "A classe existe <br>";
} else {
    echo "A classe não existe <br>";
}

print_r(get_class_vars("Humano"));

echo "<br>";

print_r(get_class_methods("Humano"));