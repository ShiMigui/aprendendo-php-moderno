<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | date</title>
</head>
<body>
    <?php
        date_default_timezone_set("America/Sao_Paulo") 
    ?>
    <p><?="Data atual: " . date("d/M/Y")?></p>
    <p><?="Hora atual: " . date("G:i")?></p>
</body>
</html>