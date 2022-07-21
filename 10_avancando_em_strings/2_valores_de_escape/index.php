<!-- Valores de escape 

Podemos utilizar alguns valores que executam funções especiais em strings;
Precisamos utilizar aspas duplas;
Exemplos: \n = nova linha;
\t = tab;
\\ = barra invertida;
\$ = sinal de dólar; -->

<?php

header("Content-type: text/plain"); //isso diz que o conteudo é texto puro. Logo o "<br>" irá aparecer e o "\n" ficará oculto e a linha será pulada.

//pular linha
echo "Isso aqui vai ficar na primeira linha \nE isso na segunda linha <br> \n"; 

//tab
echo "Testando o tab \t aqui \n";

// Barra invertida
echo "Barra invertida \\ \n";

//Dólar
echo "Imprimindo o dólar \$teste";