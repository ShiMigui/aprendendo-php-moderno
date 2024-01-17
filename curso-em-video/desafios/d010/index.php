<?php 
$ano_ref = $_POST['ano_ref'] ?? date('Y');
$ano_nas = $_POST['ano_nas'] ?? 2000;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Calculadora de idade</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <header>
        <h1>Calculadora de idade</h1>
    </header>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="ano_nas">Ano nascimento</label>
            <input type="number" name="ano_nas" id="ano_nas" value="<?=$ano_nas?>" min=1900 max=<?=date('Y')-1?> required>
            <label for="ano_ref">Idade ao final do ano</label>
            <input type="number" name="ano_ref" id="ano_ref" value="<?=$ano_ref?>" min=1900 required>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Idade</h2>
        <p>Quem nasceu em <em><?=$ano_nas?></em> terá <strong><?=$ano_ref - $ano_nas?></strong> anos ao final de <em><?=$ano_ref?></em></p>
    </section>
</body>
</html>