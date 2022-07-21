<!-- Exercício 39

Crie uma função que recebe características de algum objeto como argumento (carro, sofá, cafeteira), em array associativo;
O array deve conter nome => preco;
Retorne apenas os itens que custam mais que R$10;
Imprima o retorno; -->

<?php

$arr = [
    "monitor" => 400,
    "balinhas"  => 1,
    "picolé" => 7,
    "processador" => 1500,
];

function itensCaros($arr){

    $arrItensCaros = [];

    foreach($arr as $item => $preco){

        if($preco > 10){

            array_push($arrItensCaros, $item);
        }
    }

    return $arrItensCaros;
}

$novoArray = itensCaros($arr);

print_r($novoArray);

