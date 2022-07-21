<!-- Exercício 44

Converta a seguinte array para uma string:
["O", "PHP", "é", "muito", "legal"]
 -->

<?php

$arr = ["O", "PHP", "é", "muito", "legal"];

$string = implode(" ", $arr);

print($string);