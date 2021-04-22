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
        //01 - Ler o ano de nascimento de uma pessoa e mostrar se ela pode votar e dirigir
        /*
         $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e terá $i anos.";

        if ($i >= 18)
        {
            $v = "já pode votar";
            $d = "já pode dirigir";
        }
        else
        {
            $v = "não pode votar";
            $d = "não pode dirigir";
        }
        echo "<br/>Com essa idade você $v e também $d";
        */

        $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e terá $i anos.<br/>";

        //Condicional aninhada
        if($i < 16)
        {
            $tipoVoto = "não vota";
        }
        elseif(($i >= 16 && $i <18) || ($i > 65))
        {
            $tipoVoto = "voto opcional";
        }
        else
        {
            $tipoVoto = "voto obrigatório";
        }

        echo "Para essa idade, $tipoVoto";
    ?>
    <button>
        <a href="aula_09_condicional_if.html">Voltar</a>
    </button>
</div>
</body>
</html>
