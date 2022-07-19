<?php

$nomes = ["Pedro", "Victor", "Lima", "Batista"];

$x = "Khafan";

foreach($nomes as $nome) {
    echo "O nome do índice atual é $nome <br>";
    if($nome == "Pedro"){
        echo $x . "<br>";
    }
}