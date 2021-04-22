<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <!-- 2 - Exibir a tabuada de um número escolhido pelo usuário, de 1 até 10 -->
    <form method="get" action="exercicio02_tabuada.php">
        <select name="num">
            <?php
                for($c = 1; $c <= 10; $c++)
                {
                    echo "<option>$c</option>";
                }
            ?>
        </select>
        <input type="submit" class="botao" value="Tabuada">
    </form>
</div>
</body>
</html>