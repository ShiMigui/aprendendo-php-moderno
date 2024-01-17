<?php 
$dividendo = $_POST["dividendo"] ?? 0;
$divisor = $_POST["divisor"] ?? 1;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Anatomia da divisão</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <header>
        <h1>Anatomia da divisão</h1>
    </header>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>" min="0" require>
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$divisor?>" min="1" require>
            <input type="submit" value="Dividir">
        </form>
    </main>

    <section>
        <h2>Estrutura</h2>
        <table class="divisao">
            <tr><td><?=$dividendo?></td><td><?=$divisor?></td></tr>
            <tr><td><?=$dividendo % $divisor?></td><td><?=intdiv($dividendo, $divisor)?></td></tr>
        </table>

    </section>
</body>
</html>