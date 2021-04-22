<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title></title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <?php
        //01 - Mostrar uma contagem progressiva de 1 até 10
        /*
        $c = 1;
        while ($c <= 10)
        {
            echo $c . "<br/>";
            $c++;
        }
        $c = 1;
        */
        $c = 1;
        while ($c <= 10)
        {
            echo $c . "<br/>";
            $c += 2;
        }
    ?>

</div>
</body>
</html>
