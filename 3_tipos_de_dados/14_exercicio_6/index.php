<!-- Exercício 6: Crie um arquivo PHP que tenha um array
com características de um carro. Imprima duas características. -->

<?php

$carro = [marca => "FIAT", tipo => "SUV", aro => '17"', cor => "vermelha", placa => "ASH-1242"];

print_r($carro);
echo "<br>";

echo $carro[marca] . "<br>";
echo $carro[tipo] . "<br>";
echo $carro [aro] . "<br>";

$marca = $carro [marca];
$tipo = $carro [tipo];
$cor = $carro [cor];
$placa = $carro [placa];

echo "O carro é da marca $marca, do tipo $tipo, da cor $cor e com a placa $placa.";
