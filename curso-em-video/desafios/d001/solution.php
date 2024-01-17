<?php 
$num = $_GET["num"] ?? "none";

if (!is_numeric($num)) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Sucessor e antecessor</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <header>
        <h1>PHP <?="\u{1F418}";?></h1>
    </header>

    <main>
        <h2>Número escolhido: <?=$num?></h2>
        <p>Sucessor: <?=$num+1?></p>
        <p>Antecessor: <?=$num-1?></p>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>

</body>

</html>