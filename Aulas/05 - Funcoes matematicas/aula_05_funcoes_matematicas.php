<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Funções matemáticas</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <style>
        h2{
            font: 18px Arial;
            color: #3548a9;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "<h2>Valores recebidos: $v1 e $v2";

        echo "<br/>O  valor absoluto de $v1 é: ". abs($v2);
        echo "<br/>O valor de $v1<sup>$v2</sup> é: ". pow($v1, $v2);
        echo "<br/>A raiz quadrada de $v1 é: ". sqrt($v1);
        echo "<br/>O valor arredondado de $v2 é: ". round($v2);
        echo "<br/>A parte inteira de $v2 é: ". intval($v2);
        echo "<br/>O valor de $v1 em moeda é R$: ". number_format($v1,2, ",", ".");

    ?>
</div>
</body>
</html>