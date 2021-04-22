<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>

    <?php
        $frase = "Gosto de estudar Matemática!!!";
        $novaFrase = str_ireplace("matemática", "PHP", $frase);
        print ($novaFrase);
    ?>
</div>
</body>
</html>