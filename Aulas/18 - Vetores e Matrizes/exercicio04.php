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
                //Matrizes em PHP
                /*
                $matriz= array(3,
                                4,
                                5);
                */
                $matriz = array(array(6,4),
                                array(4,9),
                                array(3,2));

                $matriz[0][1] = $matriz[2][0];
                print_r($matriz);
            ?>
        </pre>
</div>
</body>
</html>