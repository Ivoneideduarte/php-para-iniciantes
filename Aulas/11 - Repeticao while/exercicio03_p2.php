<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Estrutura de repetição While</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <!-- Criar dinamicamente 5 caixas de texto em um formulário -->
    <form method="get" action="exercicio03_p2.php">
        <?php
            $i = 1; //Contador
            while ($i <= 5)
            {
                $v = "num".$i; // num 1, 2... 5.
                $url = "v".$i;
                $$v = isset($_GET[$url]) ? $_GET[$url] : 0; //Variável de Variável
                $i++;
            }

            //echo "$num1 $num2 $num3 $num4 $num5";

            $i = 1;
            while ($i <= 5)
            {
                $v = "num".$i;
                echo "Valor $i: ". $$v . "<br/>";
                $i++;
            }
        ?>
        <a href="exercicio03_p1.php" class="botao">Voltar</a>
    </form>

</div>
</body>
</html>
