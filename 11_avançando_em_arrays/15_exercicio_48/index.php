<?php

$arr = [
    "batata",
    "maçã",
    "pera",
    "feijão",
    "arroz"
];

$removidos = array_splice($arr, 2, -1); //a criação da variável não é obrigatória. Ela foi criada somente para fins didáticos (imprimir os valores que foram removidos);

print_r($removidos);
print_r($arr);
