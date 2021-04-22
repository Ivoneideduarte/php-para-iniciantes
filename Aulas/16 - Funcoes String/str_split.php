<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <!-- Função str_split() : Coloca cada letra de uma string em uma posição de um vetor. -->
    <?php
        $nome = "Maria";
        $vetor = str_split($nome);
        print_r($vetor);
    ?>
</div>
</body>
</html>