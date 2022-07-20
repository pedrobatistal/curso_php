<!-- Exercício 31
Crie um array com strings;
Utilize a função implode no array;
Primeiro argumento: ","
Segundo argumento: o seu array
Atribua a invocação da função a uma variável
Exiba o resultado -->

<?php

$arr = ["a", "b", "c", "d"];

$a = implode(", ",$arr); // a função implode junta um array em uma string única.

echo $a;



