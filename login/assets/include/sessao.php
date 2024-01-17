<?php
if (session_status() == PHP_SESSION_NONE) session_start();

$user_logado = isset($_SESSION['nm_login']) && isset($_SESSION['nm_usuario']) && isset($_SESSION['nm_email']);
if ($user_logado) {
    $user_login = $_SESSION['nm_login'];
    $user_email = $_SESSION['nm_email'];
    $user_name = $_SESSION['nm_usuario'];
}

function login($login, $email, $name){
    $user_logado = true;
    $user_login = $_SESSION['nm_login'] = $login;
    $user_email = $_SESSION['nm_email'] = $email;
    $user_name = $_SESSION['nm_usuario'] = $name;
}