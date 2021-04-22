<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title></title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <! -- 03 - Script para calcular o fatorial de um número inteiro -->
    <?php
        $v = isset($_GET["val"]) ? $_GET["val"] : 1;
        echo "<h1> Calculando o fatorial de $v </h1>";
        $c = $v;
        $fat = 1;
        do
        {
            $fat *= $c;
            $c--;
        } while($c >= 1);
        echo "<h2> $v ! = $fat <br/>";
    ?>
    <a href="exercicio03.html" class="botao">Voltar</a>
</div>
</body>
</html>
