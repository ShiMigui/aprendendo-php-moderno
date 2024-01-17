<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Tipos primitivos</title>
</head>
<body>
    <?php 
        $var = (int) 5e2;

        # 0x = Hexadecimal
        # 0b = Binário
        # 0 = Octal

        # MeN = M * 10^N

        # Mostra detalhes do tipo primitivo da variável
        # echo var_dump($var);
        
        /*
        $var = (int) 5e2;
        potência é entendida como "float", portanto devemos fazer a coersão "(int)" para "convertê-lo".
        */
    ?>

    <h1>O valor da variável é <?=$var?></h1>

    <?php 
        # $vet = [3, 6, 9, 12];
        # var_dump($vet);

        class Pessoa {
            private $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>

</body>
</html>