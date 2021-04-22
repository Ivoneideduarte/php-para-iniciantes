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
                //Gerenciando os últimos elementos do vetor
                $v = array("A", "J", "M", "X", "K");
                print_r($v);
                //$v[] = "O"; //Adicionando um elemento no final do vetor
                array_push($v, "0");
                array_pop($v); //Elimina o ultimo elemento do array, similar ao unset()
                print_r($v);
            ?>
        </pre>
</div>
</body>
</html>