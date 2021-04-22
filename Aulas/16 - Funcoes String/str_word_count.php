<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <!-- Função str_word_count() : Conta quantas palavras uma string possui. -->
    <?php
        $frase = "Eu vou estudar PHP";
        $cont = str_word_count($frase, 0); //0 - Conta as palavras, 1 - cria um vetor, 2 - vetor mantendo um posicionamento de cada palavra dentro da string
        print ($cont);
    ?>
</div>
</body>
</html>