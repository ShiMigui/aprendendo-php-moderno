<?php 
$salario = $_POST["salario"] ?? 0;
$salario_minimo = 1412.00;
$qt_salarios = intdiv($salario, $salario_minimo);

$pdr = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Analisador de salário</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <header>
        <h1>Analisador de salário</h1>
    </header>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>" min="1" step="0.01" require>
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Análise</h2>
        <p>O seu salário de <strong><?=numfmt_format_currency($pdr, $salario, "BRL")?></strong> equivale a:</p>
        <ul>
            <li><strong><?=$qt_salarios?></strong> salário(s) mínimo(s)</li>
            <li><strong><?=numfmt_format_currency($pdr, $salario - ($salario_minimo * $qt_salarios), "BRL")?></strong> adicionais</li>
        </ul>
        <p><em>*Salário mínimo está fixado em <strong><?=numfmt_format_currency($pdr, $salario_minimo, "BRL")?></strong></em></p>
    </section>
</body>
</html>