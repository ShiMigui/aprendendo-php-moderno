<?php
$mysql = new mysqli('localhost', 'root', 'root', 'cadastro_login');
if ($mysql->connect_error) die('Erro de Conexão (' . $mysql->connect_errno . ') ' . $mysql->connect_error);