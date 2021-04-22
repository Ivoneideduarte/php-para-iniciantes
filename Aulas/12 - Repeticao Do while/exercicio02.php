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
        do
        { //Faça
            echo $c . "<br/>";
            $c--;
        } while($c >= 1); //Enquanto
        */
        $c = 10;
        do
        {
            echo $c . "<br>";
            $c -= 2;
        } while($c >= 0);
    ?>

</div>
</body>
</html>
