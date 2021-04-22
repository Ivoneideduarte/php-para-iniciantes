<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <!-- Função print_r() : Exibe coleções, objetos e variáveis compostas (vetores e matrizes) de maneira organizada. -->
    <?php
        $v[0] = 4;
        $v[1] = 8;
        $v[2] = 3;

        print_r($v);
        //var_dump($v);
        //var_export($v);
        echo "<br/>";

        $v2 = array(3,7,6,2,1,9);
        print_r($v2);
    ?>
</div>
</body>
</html>