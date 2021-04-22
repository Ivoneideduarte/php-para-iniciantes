<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
        <pre>
            <?php
                //Chaves associativas
                $cad = array(
                             "nome" => "Ivoneide",
                             "idade" => 24,
                             "peso" => 49.90
                            );
                print_r($cad);

                foreach ($cad as $campo => $valor)
                {
                    echo "O valor de $campo é $valor<br/>";
                }
            ?>
        </pre>
</div>
</body>
</html>