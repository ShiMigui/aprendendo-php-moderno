<?php 
$valor = $_POST['valor'] ?? 0;

$qt_100reais = intdiv($valor, 100);
$valor %= 100;
$qt_50reais = intdiv($valor, 50);
$valor %= 50;
$qt_20reais = intdiv($valor, 20);
$valor %= 20;
$qt_10reais = intdiv($valor, 10);
$valor %= 10;
$qt_5reais = intdiv($valor, 5);
$valor %= 5;
$qt_2reais = intdiv($valor, 2);
$valor %= 2;

$pdr = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Caixa eletrônico</title>
    <link rel="stylesheet" href="../../style.css">
    <style>
        img{
            height: 30px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Caixa eletrônico</h1>
    </header>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="valor">Valor do saque (R$)</label>
            <input type="number" name="valor" id="valor" value="<?=$_POST['valor']?>" min="0" step=1 required>
            <p><em>*Valores disponíveis: <strong>R$1, R$2, R$5, R$10, R$20, R$50, R$100</strong></em></p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <script>
        document.getElementById("valor").focus();
    </script>

    <section>
        <h2>Saque</h2>
        <p><em>*Valor a ser sacado: </em> <strong><?=numfmt_format_currency($pdr, $_POST['valor'] ?? 0, 'BRL')?></strong></p>
        <ul>
            <li>
                <img src="../../imagens/100reais.jpg" alt="Cédula de 100 reais">
                x<?=$qt_100reais?>
            </li>
            <li>
                <img src="../../imagens/50reais.jpg" alt="Cédula de 50 reais">
                x<?=$qt_50reais?>
            </li>
            <li>
                <img src="../../imagens/20reais.jpg" alt="Cédula de 20 reais">
                x<?=$qt_20reais?>
            </li>
            <li>
                <img src="../../imagens/10reais.jpg" alt="Cédula de 10 reais">
                x<?=$qt_10reais?>
            </li>
            <li>
                <img src="../../imagens/5reais.jpg" alt="Cédula de 5 reais">
                x<?=$qt_5reais?>
            </li>
            <li>
                <img src="../../imagens/2reais.jpg" alt="Cédula de 2 reais">
                x<?=$qt_2reais?>
            </li> 
            <li>
                <img src="../../imagens/1real.jpg" alt="Moeda de 1 real">
                x<?=$valor?>
            </li> 
        </ul>
    </section>
</body>
</html>