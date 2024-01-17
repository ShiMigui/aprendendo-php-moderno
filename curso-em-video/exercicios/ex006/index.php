<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP| Formulário retoralimentado</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <?php 
    $v1 = $_GET['v1'] ?? 0;
    $v2 = $_GET['v2'] ?? 0;
    ?>

    <header>
        <h1>Somador PHP <?="\u{1F418}";?></h1>
    </header>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="text" name="v1" id="v1" value="<?=$v1?>">
            <label for="v2">Valor 2</label>
            <input type="text" name="v2" id="v2" value="<?=$v2?>">
            <input type="submit" value="Enviar">
        </form>
    </main>
    <section>
        <h2>Soma</h2>
        <p><?="$v1+$v2 = " . ($v1+$v2)?></p>
    </section>
</body>
</html>