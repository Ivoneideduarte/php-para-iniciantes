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
                        $n = array(3,5,8,2);
                        $n[] = 7;
                        print_r($n);


                        $c = range(5,20,2); //Gera o vetor dinamicamente
                        print_r($c);


                        $c = range(5,20,2); //Gera o vetor dinamicamente
                        foreach ($c as $valor)
                        { //Para cada item do vetor $c considerado como $valor, irá mostrar o valor
                            echo "$valor ";
                        }
                    ?>
                </tr>
            </table>
        </pre>
</div>
</body>
</html>