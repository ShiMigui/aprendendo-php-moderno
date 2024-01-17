<?php 
# Query strings: nome, sobrenome

# var_dump($_GET);

# $_GET - Funciona para forms de method get
# $_POST - Funciona para forms de method post
# $_REQUEST = $_GET, $_POST, $_COOKIES

$nome = $_GET["nome"] ?? "Sem nome";
$sobrenome = $_GET["sobrenome"] ?? "Desconhecido";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Query strings</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <header>
        <h1>PHP <?="\u{1F418}";?></h1>
    </header>

    <main>
        <p>É um prazer te conhecer, <strong><?="$nome $sobrenome"?></strong>, este é meu site</p>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>

</body>

</html>