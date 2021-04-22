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
                //02 - Ler nome, ano de nascimento e sexo de uma pessoa, mostrando sua idade atual
                $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Não informado]"; //Operador ternário
                $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
                $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Sem sexo]";
                $idade = date("Y") - $ano;
                echo "$nome é $sexo e tem $idade anos."
            ?>
            <button>
                <a href="aula_08_form1.html">Voltar</a>
            </button>
        </div>
    </body>
</html>
