<!-- Comparação de datas
Datas que foram criadas com o objeto de DateTime podem ser comparadas utilizando os operadores de comparação;
Operadores como: >, < ou ==
Exemplo:
$dataA > $dataB  -->

<?php

$dataA = new DateTime();
$dataB = new DateTime();

$dataC = new DateTime();

$dataB->setDate(2022, 10, 10);
$dataC->setDate(2022, 10, 10);

$dataB->setTime(01, 10, 10);
$dataC->setTime(01, 10, 10);

if($dataB > $dataA) {
  echo "A data B é maior que a data A <br>";
}
if($dataA > $dataB) {
  echo "A data A é maior que a data B <br>";
}

if($dataB == $dataC) { //Para que as datas sejam consideradas iguais, é necessario utilizar as funções setTime e setDate para que as datas fiquem exatamente iguais.
  echo "As datas A e C são iguais <br>";
}