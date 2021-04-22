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
                $nota1 = isset($_GET["n1"]) ? $_GET["n1"] : "[Nota1 não informada]";
                $nota2 = isset($_GET["n2"]) ? $_GET["n2"] : "[Nota2 não informada]";
                $media = ($nota1 + $nota2)/2;
                echo "A média entre $nota1 e $nota2 é igual a ". number_format($media, 1);

                if ($media < 5)
                {
                    $situacao = "REPROVADO";
                }
                elseif(($media >= 5) && ($media <= 7))
                {
                    $situacao = "RECUPERAÇÃO";
                }
                else
                {
                    $situacao = "APROVADO";
                }
                echo "<br/>Situação do aluno: $situacao";

            ?>
            <button>
                <a href="aula_09_desafio_notas.html">Voltar</a>
            </button>
        </div>
    </body>
</html>
