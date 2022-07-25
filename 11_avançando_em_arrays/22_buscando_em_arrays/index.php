<?php

$arr = ["banana", "maçã", "batata", "pêra", "mamão"];

if(in_array("batata", $arr)) {
    echo "Há batata no array <br>";
} else {
    echo "Não há batata no array <br>";
}

$b = "banana";

if(in_array($b, $arr)) {
    echo "Há o item no array <br>";
} else {
    echo "Não há o item no array <br>";
}

if(in_array("teste", $arr)) {
    echo "Há o item no array <br>";
} else {
    echo "Não há o item no array <br>";
}