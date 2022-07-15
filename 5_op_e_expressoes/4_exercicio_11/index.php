<!-- Exercício 11

-Crie um arquivo PHP;
-Teste a expressão "5" * 12;
-Utilize a função gettype() com o resultado como parâmetro para checar o tipo resultante da operação; -->

<?php

$expressao = "5" * 12;
echo $expressao;
echo"<br>";

echo gettype($expressao);
echo"<br>";
echo gettype([]);
echo"<br>";
echo gettype(34.2);
echo"<br>";
echo gettype(23 . 32);
echo"<br>";
echo gettype("aaa");

