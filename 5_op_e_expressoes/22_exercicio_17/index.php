<!-- Exercício 17

Verifique as seguintes operações com AND:
15>5 AND "João" === "João";
"teste" > 5 AND 1;
2 == 3 AND 5>= 3; -->

<?php

if(15 > 5 && "João" === "João"){
    echo "Entrou no if 1 <br>";
}

if ("teste" > 5 && 1){ // Não será imprimido pois o ' "teste > 5 ' é false. Caso fosse colocado uma comparação verdadeira, entraria no if, pois o 1 representa o valor de "verdadeiro". 
    echo "Entrou no if 2 <br>";
}

if(2 == 3 && 5 >= 3){ 
    echo "Entrou no if 3 <br>";
}