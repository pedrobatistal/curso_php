<!-- Podemos remover os espaços em branco de uma string com funções de PHP;

trim - limpa espaços antes e depois da string;
ltrim - limpa espaços da parte inicial da string;
rtrim - limpa espaços da parte final da string;

Desta forma conseguimos remover os espaços desnecessários inseridos pelos usuários. -->

<?php

$str1 = "        Pedro    ";

echo "Esta é a string 1: $str1. <br>";

$strLimpa = trim($str1);

echo "Esta é a string 1 limpa: $strLimpa. <br>";

$str1Limpa2 = rtrim($str1);

echo "Esta é a string 1: $str1Limpa2. <br>";