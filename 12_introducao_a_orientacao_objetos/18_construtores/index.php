<!-- Construtores

Pelos construtores podemos inicializar objetos com valores de propriedades unicos para cada objeto;
Passamos como argumento os valores das propriedades;
Exemplo:
function__construct($portas,$motor,$teto_solar) { -->

    <?php

    class Car {

        public $portas;
        public $cor;
        public $marca;

        function __construct($portas, $cor, $marca) {

            $this -> portas = $portas;
            $this -> cor = $cor;
            $this -> marca = $marca;
        }
    }

    $ferrari = new Car (4, "Vermelha", "Ferrari");

    echo "O carro é da marca $ferrari->marca e tem sua cor $ferrari->cor <br>";

    $bmw = new Car (2, "Branca", "BMW");

    echo "O carro é da marca $bmw->marca e tem sua cor $bmw->cor <br>";