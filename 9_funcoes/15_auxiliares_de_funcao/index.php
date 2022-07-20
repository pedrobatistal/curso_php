<!-- Descobrindo argumentos

No PHP temos duas funções interessantes para aprender mais sobre funções;
func_get_arg = retorna uma lista com os argumentos de uma função;
func_num_args = retorna o número de argumetos de uma função; -->


<?php

function soma ($a, $b) {

    print_r(func_get_args());
    echo "<br>";
    print_r(func_num_args());
    echo "<br>";

    return $a + $b;
}

soma (2,4);