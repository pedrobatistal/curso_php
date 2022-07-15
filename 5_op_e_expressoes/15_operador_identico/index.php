<!-- Operador idêntico a
-Com o operador idêntico a verificamos se um valor é igual ao outro, avaliando o seu tipo também;
O símbolo é: ===
Exemplo: 5 === 5 #true 
Exemplo: 3 === "3" #false -->

<?php

if(5 == "5"){
    echo "5 é 5 1 <br>";
}

if(5 === "5"){
    echo "5 é 5 2 <br>";

}

if(3==="teste") {
    echo "É igual <br>";
}

$a = 4;
$b = 4;
$c = "4";

if($a === $b){
    echo "A é idêntico a B <br>";
}

if($a === $c){
    echo "A é identico a C <br>";
}
