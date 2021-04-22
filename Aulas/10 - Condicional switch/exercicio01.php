<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title></title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <?php
        //01 - Ler um número e qual operação realizar: dobro, cubo ou raiz quadrada.
        $n = isset($_GET["num"]) ? $_GET["num"] : 0;
        $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;

        switch ($o)
        {
            case 1:
                $r = $n * 2; //Dobro
                break;
            case 2:
                $r = $n ^ 3; //Cubo
                break;
            case 3:
                $r = sqrt($n); //Raiz
                break;
        }
        echo "O resultado da operação solicitada foi <span class='foco'>$r</span>";
    ?>
    <br/>
    <a href="exercicio01.html" class="botao">Voltar</a>

</div>
</body>
</html>
