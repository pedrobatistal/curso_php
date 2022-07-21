<!-- Exercício 41

Transforme a string "este item está em promoção";
Em "Este item está em PROMOÇÃO";

Obs: você pode separar as strings, mas não pode escrever em caixa alta ou baixa manualmente, só com funções. -->

<?php

$str1 = "este item está em ";
$str2 = "promoção";

$nstr1 = ucfirst($str1);
$nstr2 = strtoupper($str2);

echo "$nstr1$nstr2.";