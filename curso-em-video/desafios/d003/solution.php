<?php 
$num = $_GET["num"] ?? 0;
$dollar = 4.87;

if (!is_numeric($num)) {
    header("Location: index.html");
    exit();
}

$res = $num / $dollar;

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
        <h2>Convertendo (R$): <?=number_format($num, 2, ',', '.')?></h2>
        <p>Cotação dóllar (R$): <?=number_format($dollar, 2, ',', '.')?></p>
        <p>Valor (US$): <?=number_format($res, 2, ',', '.')?></p>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>

</body>

</html>