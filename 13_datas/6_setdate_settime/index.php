<!-- Métodos setDate e setTime 

Temos mais dois métodos interessantes em DateTime: setDate e setTime;
setDate => Recebe ano, mês e dia, alterando completamente a data;
setTime => Recebe hora, minuto e segundo, alterando o tempo da data;-->

<?php

$data = new DateTime();

print_r($data);
echo "<br>";

$data->setDate(1999, 12, 01);

print_r($data);
echo "<br>";

$data->setTime(05, 12, 33);

print_r($data);
echo "<br>";

$data -> format("d/m/y") . "<br>";