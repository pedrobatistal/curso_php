<!--Exercicio 51

Crie um array associativo com chaves com valor de nomes, e valores com uma pontuação;
Ordene os dados do maior para o menor;
Exiba uma lista, simulando um ranking, em HTML;-->

<?php

$arr = [
    "Pedro" => 523523,
    "Maria" => 354235,
    "Joao" => 125213,
    "Matheus" => 12523,
];

arsort($arr);

?>

<h1>Ranking:</h1>
<ol>
    <?php foreach($arr as $pessoa => $pontuacao): ?>
        <li><?= $pessoa ?> -> <?=$pontuacao?> pontos </li>
    <?php endforeach; ?>
<ol>