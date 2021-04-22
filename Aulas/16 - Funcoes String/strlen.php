<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <!-- Função strlen() : Permite verificar o tamanho de uma string, contando seus caracteres (inclusive espaços em branco). -->
    <?php
        $txt = "Curso em Vídeo";
        $tamanho = strlen($txt);
        echo $tamanho;
    ?>
</div>
</body>
</html>