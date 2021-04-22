<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <!-- Função rtrim() : Elimina espaços em branco no final de uma string. -->
    <?php
        $nome = "   Jose da Silva   ";
        echo (strlen($nome));
        $novo = rtrim($nome);
        echo " $novo";
    ?>
</div>
</body>
</html>