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
        //03 - Mostrar a situação de um aluno, de acordo com a sua média obtida
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1 + $nota2) / 2;
        echo "A média entre $nota1 e $nota2 é $m <br/>";
        $sit = ($m < 6) ? "Reprovado" : "Aprovado" ;
        echo "A situação do aluno é: $sit";
    ?>
</div>
</body>
</html>