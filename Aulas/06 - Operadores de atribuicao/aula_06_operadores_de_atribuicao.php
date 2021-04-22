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
        #01 - Aplicar 10% de aumento ao preço de um produto
        $preco = $_GET["p"];
        echo "O preço do produto é R$". number_format($preco, 2, ",", ".");
        $preco += $preco*10/100;
        echo "<br/>E o novo preço com 10% de aumento será R$". number_format($preco, 2, ",", ".");

        #02 - Mostrar qual foi o ano anterior ao ano atual
        $anoAtual = $_GET["aa"]; // Essa linha vai pegar o ano na URL
        echo "<br/>O ano atual é $anoAtual e o ano anterior foi ". --$anoAtual;

        #Vamos praticar o uso de variáveis referenciadas

    ?>
</div>
</body>
</html>