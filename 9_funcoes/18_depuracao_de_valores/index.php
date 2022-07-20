<!-- Depuração de valores

Utilizamos duas funções para verificar dados formatados:

    print_r e var_dump;

As duas apresentam os dados de forma semelhante;
Porém var_dump exibe de uma forma "human readable", traduzindo seria como "para humanos lerem"; -->

<?php

$arr = [
    "Teste",
    123,
    2421412.34,
    true,
    [1,2,3]
];

print_r($arr);

echo "<br>";

var_dump($arr);


