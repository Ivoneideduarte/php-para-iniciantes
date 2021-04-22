<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $txt = isset($_GET["t"]) ? $_GET["t"] : "[Texto Generico]";
        $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>
    <meta charset="utf-8"/>
    <title>Operadores de atribuição</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <style>
        span.texto
        {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
<div>
    <?php
        //03 - Permitir a personalização de um texto através de um formulário
        echo "<span class='texto'>$txt</span>";
    ?>
    <button>
        <a href="aula_08_form2.html">Voltar</a>
    </button>
</div>
</body>
</html>
