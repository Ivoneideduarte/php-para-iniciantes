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
        do
        {
            echo $c. "<br/>";
            $c++;
        } while($c <= 10);
        */

        $c = 0;
        do
        {
            echo $c. "<br/>";
            $c += 2;
        } while($c <= 20);
    ?>

</div>
</body>
</html>
