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
                //01 - Ler um valor e mostrar sua raiz quadrada
                $valor = $_GET["v"];
                $rq = sqrt($valor);
                echo "A raiz de $valor é igual a ". number_format($rq, 2);
            ?>
            <button>
                <a href="aula_08_form.html">Voltar</a>
            </button>
        </div>
    </body>
</html>
