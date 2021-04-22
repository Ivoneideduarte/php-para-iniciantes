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
            //Ordenação por chaves
            $v = array(2 => "A", 5 => "D", 0 => "B", 3 => "C", 4=> "F");
            print_r($v);
            ksort($v);
            print_r($v);
            //Ordenação por chaves reversa
            $v = array(2 => "A", 5 => "D", 0 => "B", 3 => "C", 4=> "F");
            print_r($v);
            krsort($v);
            print_r($v);
            ?>
        </pre>
</div>
</body>
</html>