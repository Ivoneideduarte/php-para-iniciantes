<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <!-- 2 - Exibir a tabuada de um número escolhido pelo usuário, de 1 até 10 -->
    <?php
        $n = isset($_GET["num"]) ? $_GET["num"] : 1;
        for ($c = 1; $c <= 10; $c++)
        {
            $r = $n * $c;
            echo "$n x $c = $r <br/>";
        }
    ?>
    <a href="exercicio02.php" class="botao">Voltar</a>
</div>
</body>
</html>