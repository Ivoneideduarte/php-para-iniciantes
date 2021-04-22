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
            <table border="1">
                <tr>
                    <?php
                        //Chaves personalizadas
                        $v = array( 3=>5,
                                    1=>9,
                                    0=>8,
                                    7=>7
                                   );
                        unset($v[0]); //Desalocar
                        print_r($v);
                    ?>
                </tr>
            </table>
        </pre>
</div>
</body>
</html>