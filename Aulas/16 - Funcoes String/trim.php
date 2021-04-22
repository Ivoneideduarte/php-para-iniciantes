<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <!-- Função trim() : Elimina espaços em branco antes e depois de uma string. -->
    <?php
        $nome = "   Jose da Silva   ";
        echo (strlen($nome));
        $novo = trim($nome);
        echo " $novo";
    ?>
</div>
</body>
</html>