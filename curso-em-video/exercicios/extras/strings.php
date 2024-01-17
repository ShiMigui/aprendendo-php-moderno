<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Tipos de String</title>
</head>
<body>
    <h1><?="PHP \u{1F418}";?></h1>

    <?php 
        # Double quoted - Relativo à cráse (Javascript)
        /*
        $linq = "PHP"
        echo "Curso atual: $linq"; -> Curso atual: PHP
        */

        # Single quoted - Lido de forma literal pelo servidor, sem intepretação
        /*
        $linq = "PHP"
        echo 'Curso atual: $linq'; -> Curso atual: $linq
        */
        
        $linq = 'PHP';
        $ano = date("Y");
        echo "<p>Curso atual: $linq</p>";
        echo '<p>Curso atual: $linq</p>';

        const CANAL = 'Curso em Vídeo';
        echo "<p>Eu adoro o CANAL</p>";
        echo '<p>Eu adoro o CANAL</p>';
        echo "<p>Eu adoro o " .  CANAL . "</p>";

        echo "<p>Estamos no ano... " . $ano . "</p>";
        /*
        Sequência de escape para double quotes PHP:
        \n : Nova linha(quebra linha)
        \t : Tabulação
        \\ : Literalmente '\'
        \$ : Literalmente '$'
        \u{} : Unicode(símbolo, emoji, etc)
        */

        $nome = 'Miguel';
        $sobrenome = 'dos Santos';
        $apelido = 'Nascimento';

        echo "<p>$nome \"$apelido\" $sobrenome</p>";

        # Heredoc
        echo <<< FRASE
        <p>Olá pessoal, como vai em $ano? Estou estudando $linq</p>
        FRASE;

        # Nowdoc
        echo <<< 'FRASE2'
        <p>Olá pessoal, como vai em $ano? Estou estudando $linq</p>
        FRASE2;
    ?>

</body>
</html>