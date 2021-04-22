<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <!-- Função wordwrap() : Cria quebras de linha ou divisões em uma string em um tamanho especificado. -->
    <?php
        $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar a função do WordWrap";
        $r = wordwrap($t, 5, "<br/>\n", false);
        echo $r;
    ?>
</div>
</body>
</html>