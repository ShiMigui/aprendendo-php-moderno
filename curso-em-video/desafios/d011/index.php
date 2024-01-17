<?php 
$valor = $_POST['valor'] ?? 0;
$pc_aumento = $_POST['pc_aumento'] ?? 0;

$pdr = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Reajuste</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <header>
        <h1>Reajuste</h1>
    </header>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="valor">Valor (R$)</label>
            <input type="number" name="valor" id="valor" value="<?=$valor?>" min="0" step="0.01">
            <label for="pc_aumento">Percentual de aumento (<span id="pc"></span>%)</label>
            <input type="range" name="pc_aumento" id="pc_aumento" value="<?=$pc_aumento?>" min=0 max=100 step=1 oninput="changeRangeValue()">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Análise</h2>
        <p>O produto a <strong><?=numfmt_format_currency($pdr, $valor, "BRL")?></strong> com ajuste de <strong><?=$pc_aumento?>%</strong> equivale a:</p>
        <p><strong><?=numfmt_format_currency($pdr, $valor + ($valor * ($pc_aumento / 100)), "BRL")?></strong></p>
    </section>

    <script>
        const $pc_aumento = document.getElementById("pc_aumento");
        const $pc = document.getElementById("pc");
        changeRangeValue();
        function changeRangeValue() {
            pc.innerText = $pc_aumento.value;
        }

    </script>
</body>
</html>