<!-- Visibilidade

Temos três formatos de visibilidade: public, protected e private;
public: A propriedade ou método pode ser acessada de qualquer forma;
protected: A propriedade ou método pode ser acessada apenas pela classe de origem ou as que recebem a mesma de herança;
private: A propriedade ou método pode ser acessada apenas pela classe que foi criada; -->

<?php

class Car{

  public $rodas = 4;
  private $vidro = "Sem película";
  protected $portas = 4;

  public function getVidro() {
    return $this -> vidro;
  }

  public function getPortas(){
    return $this -> portas;
  }
}

class Mecanico {
  public function alterarRodas ($obj) {
    $obj -> rodas = 10;
  }

  public function colocarPelicula($carro,$pelicula) {
    $carro -> vidro = $pelicula;
  }
}

$carro = new Car;

echo $carro->rodas . "<br>";

$pedro = new Mecanico;

$pedro -> alterarRodas($carro);

echo $carro->rodas . "<br>";

// $pedro -> colocarPelicula($carro, "G20");

// echo $carro -> vidro . "<br>";  Dessa forma o vidro não será acessado, pois nao pode ser acessado pelo objeto, somente pela classe.

echo $carro -> getVidro(). "<br>";

//$carro -> vidro = "teste";

// echo $carro -> portas . "<br>"; Dessa forma nao será acessada

echo $carro -> getPortas() . "<br>";