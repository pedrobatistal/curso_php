<?php

$arr = [
    "cor" => "vermelho",
    "forma" => "retangular",
    "material" => "aço"
];

extract($arr);

echo "$cor <br>";
echo "$forma <br>";
echo "$material <br>";

$nome = "Pedro";

$pessoa = [
    "nome" => "João",
    "idade" => 22,
];

echo "$nome <br>";

extract($pessoa);

echo "$nome <br>";
echo "$idade <br>";


//a função extract cria variáveis a partir do nome das chaves dos arrays associativos.