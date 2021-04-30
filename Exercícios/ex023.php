<?php
/* 23 - Tendo como dados de entrada o nome, a altura e o sexo (M ou F) de uma pessoa, calcule 
e mostre seu peso ideal, utilizando as seguintes fórmulas: 
- para sexo masculino: peso ideal = (72.7 * altura) - 58 
- para sexo feminino: peso ideal = (62.1 * altura) - 44.7 */

    $nome = "Thiago";
    $sexo = "m";
    $altura = 1.70;
    $feminino = (62.1 * $altura) - 44.7;
    $masculino = (72.7 * $altura) - 58;

    if ($sexo == "m")
    {
        echo "$nome, seu peso ideal é: $masculino";
    }
    else if ($sexo == "f")
    {
        echo "$nome, seu peso ideal é: $feminino";
    }
?>