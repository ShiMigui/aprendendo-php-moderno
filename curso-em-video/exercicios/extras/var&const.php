<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Variáveis & constantes</title>
</head>
<body>

    <?php 
        $nome = "";
        $sobrenome = "Nascimento";

        const PAIS = "Brazil";
    ?>

    <?php 
        $nome = "Miguel"
    ?>

    <h1><?="Muito prazer, $nome $sobrenome! Você mora no " . PAIS . "?"?></h1>
</body>
</html>