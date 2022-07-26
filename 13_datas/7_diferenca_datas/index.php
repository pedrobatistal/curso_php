<!-- Diferenças entre datas
Podemos calcular a diferença entre duas datas com o método diff;
O resultado pode ser formatado com o format;
Exemplo:
$diferenca = $dateA->diff($dateB); -->

<?php

$dataA = new DateTime();
$dataB = new DateTime();

$dataB->setDate(2001, 10, 15);

print_r($dataA);
echo "<br>";
print_r($dataB);
echo "<br>";

$diferenca = $dataA->diff($dataB);

print_r($diferenca);
echo "<br>";

echo $diferenca->format("%a days");
echo "<br>";