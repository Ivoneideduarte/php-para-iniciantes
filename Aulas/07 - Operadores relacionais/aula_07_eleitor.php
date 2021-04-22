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
        //04 - Mostrar se um eleitor é obrigado a votar ou não
        $ano = $_GET["an"];
        $idade = 2021 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos.";
        $tipo = ($idade >= 18 && $idade < 65) ? "Obrigatório!" : "Não é obrigatório!";
        echo "<br/> E dessa forma seu voto é $tipo";

    ?>
</div>
</body>
</html>