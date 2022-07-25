<?php

$pessoa = ["Pedro", 24, "programador", "castanho"];

print_r($pessoa);
echo "<br>";

list($nome, $idade, $profissao, $corDosOlhos) = $pessoa;

echo "$nome <br>";
echo "$idade <br>";
echo "$profissao <br>";
echo "$corDosOlhos <br>";


// a função list "descontroi" os itens do array em valores das variáveis declaradas.
