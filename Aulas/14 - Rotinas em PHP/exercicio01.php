<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <!-- 1 - Criar um procedimento que some dois valores númericos inteiros -->
    <?php
        function soma($a, $b)
        {
            $s = $a + $b;
            echo "<p>A soma vale $s </p>";
        }
        soma(3,4);
        soma(8, 2);
        $x = 9;
        $y = 15;
        soma($x, $y);
    ?>
</div>
</body>
</html>