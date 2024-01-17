<?php
require_once './assets/include/sessao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once './assets/include/conexao.php';
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $result = $mysql->query("call selecionar_usuario('$login');");
    if ($result) {
        $row = $result->fetch_assoc(); #result

        if (password_verify($senha, $row['nm_senha'])) {
            login($row['nm_login'], $row['nm_email'], $row['nm_usuario']);
            $mysql->close();
            header('Location: painel.php');
        }
        else $message = "Login/senha incorreto(s)";
    }
}

if ($user_logado) {
    header('Location: index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="cadastro.php">Cadastro</a></li>
    </ul>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <div>
            <label for="inpLogin">Nome de usuário ou email</label>
            <input type="text" name="login" id="inpLogin" value="<?= $_POST['login'] ?? '' ?>" required>
        </div>
        <div>
            <label for="inpSenha">Senha</label>
            <input type="password" name="senha" id="inpSenha" required>
        </div>
        <input type="submit" value="Login">
        <p id="message"><?= $message ?? '' ?></p>
    </form>
</body>

</html>