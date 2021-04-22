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
                //Ordenação associativa
                $v = array("A", "D", "B", "C", "F");
                print_r($v);
                asort($v);
                print_r($v);
                //Ordenação associativa reversa
                $v = array("A", "D", "B", "C", "F");
                print_r($v);
                arsort($v);
                print_r($v);

            ?>
        </pre>
</div>
</body>
</html>