<?php 
$qt_seg_res = $qt_seg = $_POST['qt_seg'] ?? 0;

# 604800 
# 86400 
# 3600
# 60

#forma 1
/*
$qt_semana = intdiv($qt_seg_res, 604800);
$qt_seg_res -= $qt_semana * 604800;
$qt_dia = intdiv($qt_seg_res, 86400);
$qt_seg_res -= $qt_dia * 86400;
$qt_hora = intdiv($qt_seg_res, 3600);
$qt_seg_res -= $qt_hora * 3600;
$qt_minuto = intdiv($qt_seg_res, 60);
$qt_seg_res -= $qt_minuto * 60;
*/

#forma 2
$qt_semana = intdiv($qt_seg_res, 604800);
$qt_seg_res = $qt_seg_res % 604800;
$qt_dia = intdiv($qt_seg_res, 86400);
$qt_seg_res = $qt_seg_res % 86400;
$qt_hora = intdiv($qt_seg_res, 3600);
$qt_seg_res = $qt_seg_res % 3600;
$qt_minuto = intdiv($qt_seg_res, 60);
$qt_seg_res = $qt_seg_res % 60;
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
            <label for="qt_seg">Quantidade de segundos</label>
            <input type="number" name="qt_seg" id="qt_seg" value="<?=$qt_seg?>" min=0 required>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Idade</h2>
        <p><em><?=number_format($qt_seg, 0, ",", ".")?></em> segundos equivalem a:</p>
        <ul>
            <li><strong><?=$qt_semana?></strong> semanas</li>
            <li><strong><?=$qt_dia?></strong> dias</li>
            <li><strong><?=$qt_hora?></strong> horas</li>
            <li><strong><?=$qt_minuto?></strong> minutos</li>
            <li><strong><?=$qt_seg_res?></strong> segundos</li>
        </ul>
    </section>
</body>
</html>