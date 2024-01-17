<?php
require_once './assets/include/sessao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Seja bem-vindo, <strong><?= $user_logado ? $user_login : 'visitante' ?></strong>!</h1>
    <?php if ($user_logado) : ?>
        <ul>
            <li><a href="painel.php">Painel</a></li>
            <li><a href="sair.php">Sair</a></li>
        </ul>
    <?php else : ?>
        <ul>
            <li><a href="cadastro.php">Cadastro</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    <?php endif; ?>
</body>

</html>