<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <!-- 3 - Realizar uma soma com múltiplos parâmetros -->
    <?php
        function soma() //Sem parametros estipulados
        {
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;

            for ($i = 0; $i < $t; $i++)
            {
                $s += $p[$i];
            }
            return $s;
        }
        $r = soma(3,5,2,8,9);
        echo "A soma dos valores é $r";
    ?>
</div>
</body>
</html>