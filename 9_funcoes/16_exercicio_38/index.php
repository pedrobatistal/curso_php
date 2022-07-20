Exercício 38 <br> <br>

Crie uma função que recebe um array de itens de supermercado;
Retorne este array em forma de string, separando em vírgulas;
<br><br>

<?php

$lista = ["arroz", "feijao", "carne"];

function arrayToString($arr){

    $str = "Você levou estes itens do mercado: ";

    for($i = 0; $i < count($arr); $i++) {

        if($i + 1 == count($arr)) {
            $str .= "$arr[$i].";
        } elseif($i + 2 == count($arr)){
            $str .= "$arr[$i] e ";

        }else {
            $str .= "$arr[$i], ";
        }
    }

    return $str;

}

echo arrayToString($lista);