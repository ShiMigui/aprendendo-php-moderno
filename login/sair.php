<?php
require_once './assets/include/sessao.php';
if ($user_logado) {
    $_SESSION['nm_login'] = null;
    $_SESSION['nm_email'] = null;
    $_SESSION['nm_usuario'] = null;
}

header('Location: index.php');
