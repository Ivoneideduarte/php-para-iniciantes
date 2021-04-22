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
    //01 - Mostrar uma contagem regressiva de 10 até 1
    /*
    $c = 10;
    while ($c >= 1)
    {
        echo $c . "<br/>";
        $c--;
    }
    */
    $c = 10;
    while ($c >= 0)
    {
        echo $c . "<br/>";
        $c -= 2;
    }
    ?>

</div>
</body>
</html>
