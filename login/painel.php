<?php 
require_once './assets/include/sessao.php';
if(!$user_logado){
    header('Loaction: index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <h1>Painel</h1>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="sair.php">Sair</a></li>
    </ul>
    <h2><?=$user_login?></h2>
    <p>Nome: <?=$user_name?></p>
    <p>Email: <?=$user_email?></p>
</body>
</html>