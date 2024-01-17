<?php 
$num = $_GET["num"] ?? 0;

if (!is_numeric($num)) {
    header("Location: index.html");
    exit();
}

$dt_inicio = date("m-d-Y", strtotime("-7 Days"));
$dt_fim = date("m-d-Y");
$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$dt_inicio.'\'&@dataFinalCotacao=\''.$dt_fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra';
$data = json_decode(file_get_contents($url), true);

$dollar = $data['value'][0]['cotacaoCompra'];

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
        <p>*A cotação foi retirada do site do <a href="https://dadosabertos.bcb.gov.br/">Banco Central do Brasil</a></p>
    </main>

</body>

</html>