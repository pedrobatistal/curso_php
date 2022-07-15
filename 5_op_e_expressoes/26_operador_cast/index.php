<!-- Operador de cast: é o operador de conversão (converte). -->

<?php

$a = (int)"12"; // está convertendo a string ' "12" ' para o inteiro '12'. 

echo $a;
echo "<br>";
echo $a + 10;
echo "<br>";

if ($a === 12) { // conferindo se foi convertido
    echo "A é identico a 12 <br>";
}

$b = (float)"3.14155326";

if ($b === 3.14155326) {
    echo "B é idêntico a 3.14152452 <br>";
}

$c = (string) 34;

if ($c === "34"){
    echo "C é identico a '34' <br>";
}