<?php 
$min = $_POST["min"] ?? 0;
$max = $_POST["max"] ?? 100;

if(!is_numeric($min) || !is_numeric($max)){
    header("Location: index.php");
    exit();
}

# mt_rand() - (1957), 4x mais rápida
# rand() - (1951), (era) a mais lenta, à partir do PHP 7.1 apenas refere a mt_rand()
# random_int() - gera números aleatórios criptografados seguro, mais lento de todos
$num = mt_rand($min, $max);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Número aleatório</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
    <header>
        <h1>PHP <?="\u{1F418}";?></h1>
    </header>

    <main>
        <h2>Gerador de números</h2>
        <form action="" method="post">
            <div><label for="min">Valor mínimo</label><input type="number" name="min" id="min" value="<?=$min?>"></div>
            <div><label for="max">Valor máximo</label><input type="number" name="max" id="max" value="<?=$max?>"></div>
            <input type="submit" value="Gerar">
        </form>
        <p>Resultado: <?=$num?></p>
    </main>

</body>

</html>