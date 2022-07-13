<!-- Exercício 7: Crie um arquivo PHP que tenha um array associativo com características de uma pessoa.
Desafio: faça um if checando se ela é maior de idade e imprima uma mensagem, caso seja; -->

<?php

$pessoa = [
    nome => "Pedro",
    idade => "24",
    altura => "181",
    peso => "70kg"];

$nome = $pessoa[nome];
$idade = $pessoa[idade];
$altura = $pessoa[altura];
$peso = $pessoa[peso];

if($pessoa[idade] >= 18){
    echo "A pessoa é maior de idade";
}

echo "<br>";
echo "O nome da pessoa é $nome, sua idade é $idade anos,
sua altura é $altura cm e seu peso é $peso.";