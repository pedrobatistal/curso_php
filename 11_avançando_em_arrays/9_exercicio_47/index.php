<!-- Exercicio 47
Crie um array com os seguintes valores: jaguar, 3.0, azul, 18, Teto solar, automático;
Chame este array de carro;
Crie variáveis com base neste array; -->

<?php

$carro = ["Jaguar", 3.0, "azul", 18, "teto solar", "automático"];

print_r($carro);

list($modelo,$volumeMotor,$cor,$aro,$bonus,$cambio) = $carro;

echo "$modelo <br>";
echo "$volumeMotor <br>";
echo "$cor <br>";
echo "$aro <br>";
echo "$bonus <br>";
echo "$cambio <br>";

