<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <!-- Função ord() : Retorna o código ASCII de um caractere passado como parâmetro. -->
    <?php
        $letra = "C";
        $cod = ord($letra);
        print("A letra $letra tem código $cod");
    ?>
</div>
</body>
</html>