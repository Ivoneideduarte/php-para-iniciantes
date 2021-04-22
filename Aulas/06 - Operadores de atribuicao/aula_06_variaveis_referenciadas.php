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
        #Vamos praticar o uso de variáveis referenciadas
        $a = 3;
        $b = &$a; //Referencia &
        $b += 5;
        echo "A variável A vale $a";
        echo "<br/>A variável B vale $b";

        #Vamos praticar o uso de variáveis de variáveis
        $x = "abc";
        $$x = "def";
        echo "<br/>O conteúdo da variável X é $x";
        echo "<br/>A variável ABC criada recebeu o valor $abc";

    ?>
</div>
</body>
</html>