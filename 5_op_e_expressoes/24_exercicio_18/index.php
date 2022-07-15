<!-- Exercicio 18

Verifique as seguintes operações com OR:
    12 < 5 OR "João" === "João";
    1 > 5 OR 1;
    20 === "20" AND 51 >= 31; -->

<?php

if (12<5 || "João" === "João"){ // false e true
    echo "Entrou no if 1 <br>";
    }

if (1>5 || 1){
    echo "Entrou no if 2 <br>"; // true e true
}

if (20 === "20" && 51>= 31){ // false e true
    echo "Entrou no if 3 <br>";
}