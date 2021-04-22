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
        //02 - Ler o dia da semana(2 -7) e mostrar se precisa ou não ir pra escola
        $d = isset($_GET["ds"]) ? $_GET["ds"] : 0;

        switch ($d)
        { //De segunda à sexta
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Levanta e vai estudar! :)";
                break;
            case 7:
            case 8:
                echo "Descanse, pequeno gafanhoto! ;)";
                break;
            default:
                echo "Dia da semana inválido! :(";
        }

    ?>
    <br/>
    <a href="exercicio02.html" class="botao">Voltar</a>

</div>
</body>
</html>
