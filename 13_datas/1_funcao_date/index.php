<!--Função date
A função date recebe um parâmetro, que é o formato da data, e este é o primeiro parâmetro da mesma;
A resposta será a data atual
Exemplo:
date("d/m/y");-->

<?php

$d = date("d/m/y");

echo $d . "<br>";

$d2 = date("D, M - Y");

echo $d2 . "<br>";

$d3 = date("d - M - Y");

echo $d3 . "<br>";

//procurar documentação do PHP para verificar as formas de representação das datas
