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
                //Quais são as funções para vetores em PHP
                $v = array("A", "J", "M", "X", "K");
                $tot = count($v);
                echo "O vetor tem $tot elementos <br/>";
                print_r($v); //Não mostra a quantidade de elementos
                //var_dump($v); //Mostra o tipo dos elementos e a quantidade
            ?>
        </pre>
</div>
</body>
</html>