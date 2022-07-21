<!-- Alterando o case

Podemos alterar as strings para maiúsculas ou minúsculas com funções de PHP;
strtolower - todas as letras minúsculas;
strtoupper - todas as letras minúsculas; -->

<?php

$str = "esta string está em caixa baixa <br>";

echo strtoupper($str);

$str2 = "E ESTA AQUI EM CAIXA ALTA <br>";

echo strtolower($str2);