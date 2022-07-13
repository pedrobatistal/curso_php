<?php

$x = 10; 

$y =& $x;

echo "$x <br>";
echo "$x <br>";

$y = 15;

echo "Atribuição após ref: <br>";
echo "$x<br>";
echo "$y<br>";

//significa que as duas variáveis sempre serão iguais. 
//Portanto, se muda o valor de uma, a outra mudará também.
//Independente se a mudança for feita na referência ou na referenciada.