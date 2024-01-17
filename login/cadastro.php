<?php
require_once './assets/include/sessao.php';
if ($user_logado) {
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require_once './assets/include/conexao.php';

    # variáveis
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $result = $mysql->query("CALL novo_usuario('$email', '$login', '$nome', '$senha')");
    $row = $result->fetch_assoc(); #result

    if ($row['situacao'] == true) {
        login($login, $email, $nome);
        $mysql->close();
        header('Location: painel.php');
    } elseif ($row['feedback'] === 'ERR_EMAIL')  $message = 'Email já está sendo utilizado';
    else $message = 'Nome de usuário já está sendo utilizado';

    $mysql->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <h1>Cadastro</h1>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" id="formCadastro">
        <div>
            <label for="inpNome">Nome completo</label>
            <input type="text" name="nome" id="inpNome" value="<?= $_POST['nome'] ?? '' ?>" required>
        </div>
        <div>
            <label for="inpLogin">Nome de usuário</label>
            <input type="text" name="login" id="inpLogin" value="<?= $_POST['login'] ?? '' ?>" required>
        </div>
        <div>
            <label for="inpEmail">Email</label>
            <input type="email" name="email" id="inpEmail" value="<?= $_POST['email'] ?? '' ?>" required>
        </div>
        <div>
            <label for="inpSenha">Senha</label>
            <input type="password" name="senha" id="inpSenha" required>
        </div>
        <div>
            <label for="inpSenha2">Confirme a senha</label>
            <input type="password" name="senha2" id="inpSenha2" required>
        </div>
        <input type="submit" value="Cadastrar">
        <p id="message"><?= $message ?? '' ?></p>
    </form>

    <script src="./assets/script/page.cadastro.js"></script>
</body>

</html>