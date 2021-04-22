<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <!-- 4 - Criar um contador personalizável -->
    <?php
        $v1 = isset($_GET["ni"]) ? $_GET["ni"] : "Valor não informado";
        $v2 = isset($_GET["nf"]) ? $_GET["nf"] : "Valor não informado";
        $cont = isset($_GET["inc"]) ? $_GET["inc"] : "Valor não informado";

        $c = $v1; //Contador recebe o valor inicial
        while ($c <= $v2) //Compara se o contador é menor ou igual ao valor recebido na variável do valor final
        {
            echo $c . "<br/>";
            $c += $cont;
        }
    ?>
    <a href="exercicio04.html" class="botao">Voltar</a>
</div>
</body>
</html>