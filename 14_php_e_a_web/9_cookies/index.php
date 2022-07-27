<!-- Mantendo o estado

O HTTP é um protocolo que não mantem o estado (stateless);
Ou seja, após o fim da requisição a conexão entre usuário e servidor é finalizada, a próxima conexão não possui mais relação entre ambos;
Para conseguir manter estes dados, podemos utilizar os cookies;
O problema desta abordagem é que alguns navegadores não permitem o uso de cookies ou o bloqueiam; 

Os cookies são strings que contém informações;
A função para adicionar um cookie é setcookie;
A função deve ser chamada antes do corpo da página, pois envia dados como o header(cabeçalho);
O cookie leva dados como: nome, valor e data de expiração;
Podemos acessar os cookies de volta com o $_COOKIE;-->

<?php

setcookie("nome", "Pedro",time() + 3600);

if(isset($_COOKIE["nome"])) {
    $nome = $_COOKIE["nome"];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá Mundo!</h1>
    <?php if($nome != ""): ?>
        <p>Seja bem-vindo <?= $nome ?></p>
    <?php endif; ?>
</body>
</html>