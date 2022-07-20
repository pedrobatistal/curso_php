<!-- Para chamar uma função basta colocar o seu nome e abrir e fechar parênteses;
Exemplo: funcaoTeste()
Algumas funções exigem parâmetros;
O ato de chamar uma função também é conhecido como "invocar";
O PHP tem diversas funções para utilizarmos no nosso código, exemplos:
strlen, strtoupper, strtolower, print_r, var_dump --> 

<?php


    //definindo funcao
    function soma() {

        $a = 5;
        $b = 4;
        
        echo $a + $b . "<br>";

    }

    //chamando / invocando funcao
    soma();
    soma();

   // funcao do php
   echo strtoupper("testando função");