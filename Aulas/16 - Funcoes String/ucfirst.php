<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <!-- Função ucfirst() : Coloca somente as primieras letras em maiúsculas. -->
    <?php
    $nome = "Ivoneide Duarte dos Santos";
    echo "Seu nome é ". ucfirst(strtolower($nome));
    ?>
</div>
</body>
</html>