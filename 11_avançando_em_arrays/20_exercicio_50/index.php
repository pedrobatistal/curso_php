<!--Exercicio 50

Crie um array associativo com nomes e idades;
Imprima estes dados em uma tabela de HTML;
Dica: utilize as tags do elemento table. --> 

<?php

$pessoas = [
    "Pedro" => 24,
    "Maria" => 21,
    "Matheus" => 29,
    "João" => 43
];

?>

<table border ="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoas as $nome => $idade): ?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?=$idade; ?></td>
    </tr>
    <?php endforeach; ?>
</table>