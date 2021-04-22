<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <!-- Função implode() : Transforma um vetor inteiro em uma string. -->
    <?php
        $vetor[0] = "curso";
        $vetor[1] = "em";
        $vetor[2] = "video";
        $texto = implode(" ", $vetor);
        print ($texto);
    ?>
</div>
</body>
</html>