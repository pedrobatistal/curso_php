<?php

$pedro = [
    "nome" => "Pedro",
    "idade" => 24,
    "profissao" => "Programador"
];

$maria = [
    "nome" => "Maria",
    "idade" => 21,
    "profissao" => "Admnistradora"
];

foreach($pedro as $carac =>$value) {

    echo "$carac => $value <br>";
}

foreach($maria as $carac =>$value) {

    echo "$carac => $value <br>";
}


//foreach($nomeArray as $key => $value){}