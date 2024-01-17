<?php 
$num = $_GET["num"] ?? 0;
$dollar = 4.87;

if (!is_numeric($num)) {
    header("Location: index.html");
    exit();
}

$pdr = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Conversor</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <header>
        <h1>PHP <?="\u{1F418}";?></h1>
    </header>

    <main>
        <h2>Convertendo: <?=numfmt_format_currency($pdr, $num, "BRL")?></h2>
        <p>Cotação dóllar: <?=numfmt_format_currency($pdr, $dollar, "USD")?></p>
        <p>Valor: <?=numfmt_format_currency($pdr, $num/$dollar, "BRL")?></p>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>

</body>

</html>