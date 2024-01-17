<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP| Superglobais PHP</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <header>
        <h1>PHP <?="\u{1F418}";?></h1>
    </header>

    <main>
        <ul>
            <li><a href="post.html">Forms POST</a></li>
        </ul>
        <pre>
            <?php 
            setcookie("dia-da-semana", "Quarta-feira", time() + 3600);
            session_start();
            $_SESSION["name"] = "Miguel";
            ?>
            <h2>Superglobal $_GET</h2>
            <p><?=var_dump($_GET)?></p>
            <h2>Superglobal $_POST</h2>
            <p><?=var_dump($_POST)?></p>
            <h2>Superglobal $_REQUEST</h2>
            <p><?=var_dump($_REQUEST)?></p>
            <h2>Superglobal $_COOKIE</h2>
            <p><?=var_dump($_COOKIE)?></p>
            <h2>Superglobal $_SESSION</h2>
            <p><?=var_dump($_SESSION)?></p>
            <h2>Superglobal $_ENV</h2>
            <p><?=var_dump($_ENV)?></p>
            <h2>Superglobal $_SERVER</h2>
            <p><?=var_dump($_SERVER)?></p>
            <h2>Superglobal $GLOBALS</h2>
            <p><?=var_dump($GLOBALS)?></p>
        </pre>
    </main>
</body>
</html>