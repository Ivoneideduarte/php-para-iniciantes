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
            $c = 1; //Contador
            while ($c <= 5)
            {   //Não pode colocar aspas duplas dentro de um echo
                echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/><br/>";
                $c++;
            }

        ?>
        <input type="submit" value="Enviar" class="botao"/>
    </form>

</div>
</body>
</html>
