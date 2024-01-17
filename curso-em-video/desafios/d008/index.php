<?php 
$num = $_POST["num"] ?? 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Calculadora de raízes</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <header>
        <h1>Calculadora de raízes</h1>
    </header>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$num?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Cálculo</h2>
        <p>Analisando o número: <strong><?=$num?></strong></p>
        <ul>
            <li>Raíz quadrada: <strong><?=number_format($num ** (1/2), 3, ",", ".")?></strong></li>
            <li>Raíz cúbica: <strong><?=number_format($num ** (1/3), 3, ",", ".")?></strong></li>
        </ul>
    </section>
</body>
</html>