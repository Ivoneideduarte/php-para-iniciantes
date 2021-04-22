<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <!-- 1 - Mostrar várias contagens utilizando a estrutura FOR -->
    <?php
        for ($i = 1; $i <= 10; $i++)
        {
            echo "$i ";
        }
        echo "<br/>";
        for ($i = 10; $i >= 1; $i--)
        {
            echo "$i ";
        }
        echo "<br/>";
        for ($i = 0; $i <= 50; $i+=5)
        {
            echo "$i ";
        }
        echo "<br/>";
        for ($i = 30; $i >= 0; $i -= 2)
        {
            print "$i ";
        }
    ?>

</div>
</body>
</html>