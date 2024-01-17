<?php 
$num = $_POST["num"] ?? 0;

if (!is_numeric($num)) {
    header("Location: index.html");
    exit();
}
$int = (int) $num;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Analisador</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <header>
        <h1>PHP <?="\u{1F418}";?></h1>
    </header>

    <main>
        <h2>Analisando: <?=number_format($num, 3, ",", ".")?></h2>
        <p>Parte inteira: <?=number_format($int, 0, ",", ".")?></p>
        <p>Parte decimal: <?=number_format($num-$int, 3, ",", ".")?></p>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>

</body>

</html>