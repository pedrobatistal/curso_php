<!-- Exercício 37

Crie uma função chamada defineCorCarro;
Onde há um parâmetro chamado cor, com valor default de vermelha;
retorne a cor do carro;
Imprima o retorno tanto com parâmetro default, como também definindo a cor; -->


<?php

function defineCorCarro ($cor= "Vermelho"){

    return "A cor do carro é: $cor";
}

echo defineCorCarro() . "<br>";
echo defineCorCarro("Azul") . "<br>";
echo defineCorCarro("Preto") . "<br>";

