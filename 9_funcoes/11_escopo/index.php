<!-- Relembrando escopo e funções

Nas funções temos um escopo específico chamado de local, onde as suas variáveis são exclusivamente delas;
Podemos utilizar as variáveis globais com a instrução global;
E também há o static, onde podemos manter um valor após a execução de uma função, o que normalmente é resetado. -->

<?php

$a = 10;
$b = 15;

function testeEscopo() {
    $a = 5;
    $a++; //somente o $a do local será alterado.
    global $b; //está chamando a variável $b do escopo global.
    $b++;
    static $c = 0; //static salva o valor e a proxima função é executada com base neste valor salvo.
    $c++;
    echo "ESCOPO LOCAL DE A: $a <br>";
    echo "ESCOPO GLOBAL NA FUNÇÃO DE B: $b <br>";
    echo "ESCOPO STATIC DE C: $c <br>";
}

echo "ESCOPO GLOBAL DE A: $a <br>";
echo "ESCOPO GLOBAL DE B: $b <br>";

testeEscopo();

echo "ESCOPO GLOBAL DE B 2: $b <br>";

testeEscopo();