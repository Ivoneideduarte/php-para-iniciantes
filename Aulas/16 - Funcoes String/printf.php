<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <!-- Função printf() : Permite exibir uma string com itens formatados. -->
    <?php
        $p = "Leite";
        $pr = 4.5;
        /* O que usavamos anteriormente
         * echo "O $p custa R$" . number_format($pr, 2);
         */
        printf("O %s custa R$ %.2f", $p, $pr);

    ?>
</div>
</body>
</html>