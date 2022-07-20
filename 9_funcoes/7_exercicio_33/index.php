<!-- Exercício 33

Crie uma função;
Ela deve receber um parâmetro de nome e idade;
Imprima "Olá eu sou o NOME e tenho X anos"; -->

<?php

function informacoesUsuario($nome,$idade,$genero) {

    if($genero == "masculino") {
        echo "Olá! Eu sou o $nome e tenho $idade anos. <br>";

    } elseif ($genero == "feminino") {
        echo "Olá! Eu sou a $nome e tenho $idade anos. <br>";

    } else {
        echo "Olá! Eu sou $nome e tenho $idade anos. <br>";
    }
    
}

informacoesUsuario ("Pedro",24,"masculino");
informacoesUsuario ("Maria", 21, "feminino");
