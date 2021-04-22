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
                //Ordenando vetores
                $v = array("A", "D", "B", "C", "F");
                print_r($v);
                sort($v);
                print_r($v);
                //Ordem reversa
                $v = array("A", "D", "B", "C", "F");
                print_r($v);
                rsort($v);
                print_r($v);
            ?>
        </pre>
</div>
</body>
</html>