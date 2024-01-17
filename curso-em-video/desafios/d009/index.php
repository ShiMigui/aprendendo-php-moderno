<?php 
$nota1 = $_POST["nota1"] ?? 0;
$nota2 = $_POST["nota2"] ?? 0;
$peso1 = $_POST["peso1"] ?? 1;
$peso2 = $_POST["peso2"] ?? 1;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Médias aritméticas</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <header>
        <h1>Médias aritméticas</h1>
    </header>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="nota1">Nota 1</label>
            <input type="number" name="nota1" id="nota1" value="<?=$nota1?>" min=0 required>
            <label for="peso1">Peso 1</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>" min=1 required>
            <label for="nota2">Nota 2</label>
            <input type="number" name="nota2" id="nota2" value="<?=$nota2?>" min=0 required>
            <label for="peso2">Peso 2</label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>" min=1 required>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Média</h2>
        <p>A média simples é: <strong><?=number_format(($nota1 + $nota2) / 2, 2, ",", ".")?></strong></p>
        <p>A média ponderada é: <strong><?=number_format(($nota1 * $peso1 + $nota2 * $peso2) / ($peso1 + $peso2),2, ",", ".")?></strong></p>
    </section>
</body>
</html>