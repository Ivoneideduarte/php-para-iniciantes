<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Operadores de atribuição</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <?php
        //01 - Permitir que o usuário escolha entre somar e multiplicar dois números
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $n1 e $n2 <br/>";
        $r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2; //Operador unário
        echo "O resultado será $r";

        $a = 3;
        $b = "3";
        $r = ($a == $b) ? "SIM" : "NAO";
        echo "<br/>As variáveis A e B são iguais? $r";

        $a = 3;
        $b = "3";
        $r = ($a === $b) ? "SIM" : "NAO";
        echo "<br/>As variáveis A e B são idênticas? $r";
    ?>
</div>
</body>
</html>