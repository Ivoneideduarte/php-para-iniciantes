<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <!-- Função explode() : Quebra uma string e coloca os itens em um vetor. -->
    <?php
        $site = "Curso em Vídeo";
        $vetor = explode(" ", $site);
        print_r($vetor);
    ?>
</div>
</body>
</html>