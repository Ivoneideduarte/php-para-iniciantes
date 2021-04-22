<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../16%20-%20Funcoes%20String/_css/estilo.css">
</head>
<body>
<div>
    <!-- 1 - Criar um procedimento que use a passagem de parâmetros por referência -->
    <?php
        function teste(&$x) //Passagem por referência
        {//Qualquer alteração em X interfere diretamente no valor de A
            $x += 2;
            echo "O valor de X é $x";
        }

        $a = 3;
        teste($a);
        echo "<p>O valor de A é $a</p>"
    ?>
</div>
</body>
</html>