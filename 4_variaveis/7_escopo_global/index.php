<!-- Variável global 
A principal característica da variável global é ser declarada fora de funções;
Por comportamento padrão não são acessíveis dentro de funções;
Precisamos utilizar a palavra global para isso;
Essa função da variável global não ser acessível dentro de funções, previne muitos problemas no software; -->

<?php

    $teste = "asd";

    echo "$teste global 1 <br>";

    if(5>2){

        $teste = "dsa";
        echo "$teste if <br>";

    }

    echo "$teste global 2 <br>";

    function funcao() {

        $teste = "xsxs_";
        echo "$teste local <br>";

    }
    funcao();

    function testandoGlobal() {

        global $teste; 

        $teste = 3; // mudando a variavel global a partir da variavel local

        echo "$teste global função <br>";

    }
    testandoGlobal();

    echo "$teste global 3 <br>";