<?php

$peso = 69;
$altura = 1.67;
$imc = $peso / $altura ** 2;

    echo "Seu IMC é de $imc.";

    if ($imc <18) {
        echo " Você está com o IMC abaixo";
    } elseif ($imc< 25) {
        echo " Você está com o IMC dentro";
    } else {
        echo "acima";
    }
        echo " do recomendado";
?>