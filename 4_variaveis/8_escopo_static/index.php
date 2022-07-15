<!-- Variável Estática

A variável estática é declarada com a instrução static;
O valor da mesma é mantido e alterado a cada execução de uma função;
É interessante este comportamento pois as variáveis de escopo local sempre são resetadas; -->

<?php

function teste(){

    $a = 0;
    $a++;

    echo "$a<br>";

}
teste();
teste();
teste();

function testeStatic(){

    static $a = 0; // O static mantem o valor a cada fim de execução da função, para que esse valor seja executado no inicio do novo bloco de execeução.
    $a++;

    echo "$a<br>";

}

testeStatic();
testeStatic();
testeStatic();