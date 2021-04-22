<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
        <pre>
            <?php
                //Gerenciando os primeiros elementos do vetor
                $v = array("A", "J", "M", "X", "K");
                print_r($v);
                array_unshift($v, "Y");
                //array_shift($v); //Elimina o ultimo elemento do array
                print_r($v);
                ?>
        </pre>
</div>
</body>
</html>