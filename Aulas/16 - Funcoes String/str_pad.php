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
        $nome = "Guanabara";
        $novo = str_pad($nome,30," ",STR_PAD_RIGHT); //STR_PAD_CENTER ; STR_PAD_LEFT
        print ("Meu professor $novo é lindo!");
    ?>
</div>
</body>
</html>