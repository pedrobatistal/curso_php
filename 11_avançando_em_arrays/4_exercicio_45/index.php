<!-- Exercicio 45

Crie um array com a função range do 10 a 45;
Imprima todos os números com uma soma de 6;
Se passar de 30 a soma, imprima também que o número é muito alto; -->

<?php

$arr = range(10,45);

// print_r($arr);
// echo "<br>";

for($i = 0; $i < count($arr);$i++){
  $arr[$i] += 6;
  echo "O novo novo número do índice $i do array é: $arr[$i] <br>";

    if($arr[$i] > 30){ 
      echo "O número $arr[$i] é muito alto <br>";
    }
    
}

echo "<br> <br>resolução alternativa: <br> <br>"; 

$arr = range(10,45);

for($i = 0; $i < count($arr);$i++) {

  $soma = $arr[$i] + 6;

  if($soma > 30) {

    echo "O número $soma é muito alto <br>";

  } else {

    echo "$soma <br>";

  }
}