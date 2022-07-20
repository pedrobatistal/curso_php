<!-- Retornando múltiplos valores

Caso seja necessário retornar vários valores em uma função, podemos formar um array para retorno;
E entrão acessar os índices de forma isolada com a nova variável que contém o retorno;

function teste(){
    return["a",10,true];
} -->


<?php

function alteraDados($nome, $idade){

    $nome = "Sr. $nome";
    $idade = "$idade anos";

    return[$nome,$idade];

}

$dados = alteraDados("Pedro",24);

print_r($dados);

echo "<br>";

echo "Olá $dados[0], você tem $dados[1]";