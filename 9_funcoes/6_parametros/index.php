<?php

function velocidadeMaxima($vel) {

    if(is_int($vel)) {

        echo "O carro atinge a velocidade máxima de $vel km/h <br>";

    } else {
        echo "Por favor, informe um número inteiro <br>";
    }

    
}

velocidadeMaxima(200);
velocidadeMaxima(400);
velocidadeMaxima(42);

// Não pode executar funções, que exigem parâmetros, sem um parâmetro
// velocidadeMaxima();

$velocidade = 554;

velocidadeMaxima($velocidade);

// O PHP ignora o parâmetro desnecessário
velocidadeMaxima(250, "teste");

velocidadeMaxima("teste");


// Mais de um parâmetro
function descreverAnimal ($nome, $raca){

    echo "O(a) $nome é da raça $raca; <br>";

}

descreverAnimal("Clara","bulldog francês");
descreverAnimal("José", "pinscher");
