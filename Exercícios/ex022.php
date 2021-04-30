<?php
/* 
22 - A jornada de trabalho semanal de um funcionário é de 40 horas. O funcionário que trabalhar mais 
de 40 horas receberá hora extra, cujo cálculo é o valor da hora regular com um acréscimo de 50%. 
Escreva um algoritmo que leia o número de horas trabalhadas em um mês, o salário por hora e escreva 
o salário total do funcionário, que deverá ser acrescido das horas extras, caso tenham sido trabalhadas 
(considere que o mês possua 4 semanas exatas). 
*/
    $extra = 0;
    $salarioFinal = 0;
    $salarioInicial = 0;
    $horaExtra = 0;
    $salarioExtra = 0;
    $horasTrabalhadas = 50;
    $salarioHora = 150;
    $salarioInicial = 40 * $salarioHora;

    if ($horasTrabalhadas == 40)
    {
        echo "Seu salário é: R$" . number_format($salarioInicial, 2, ",", ".");
    } 
    else if ($horasTrabalhadas > 40) 
    {
        $horaExtra = $horasTrabalhadas - 40;
        $extra = ($salarioHora * 50) / 100;
        $salarioExtra = $horaExtra * $extra;
        $salarioFinal = $salarioInicial * $salarioExtra;

        echo "Seu salário é R$" . number_format($salarioFinal, 2, ",", ".");
        
    }

?>