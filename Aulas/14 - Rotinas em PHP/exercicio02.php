<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <!-- 1 - Criar uma função que some dois valores númericos inteiros -->
    <?php
        function soma($a, $b)
        {
            return $a + $b;
        }
        $x = 9;
        $y = 15;
        $r = soma($x, $y);
        echo "A soma entre $x e $y é igual a $r";
    ?>
</div>
</body>
</html>