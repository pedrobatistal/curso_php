<!-- Exercício 40 

Percorra a string: O rato roeu a roupa do rei de Roma, a partor de um loop;
Imprima o número de letras "a" desta string; -->

<?php

$str = "O rato roeu a roupa do rei de Roma.";

$contador = 0;

for($i = 0; $i < strlen($str);$i++){


    if($str[$i] === "a") {
        $contador++;
    }
    
}
echo "O número de a's na frase é de : $contador";

