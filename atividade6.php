<?php

function converteTemperatura($temperatura, $tipoDeConversao) {
    if ($tipoDeConversao == 'c-to-f') {
        // Converte de Celsius para Fahrenheit
        $fahrenheit = ($temperatura * 9/5) + 32;
        return $fahrenheit;
    } elseif ($tipoDeConversao == 'f-to-c') {
        // Converte de Fahrenheit para Celsius
        $celsius = ($temperatura - 32) * 5/9;
        return $celsius;
    } else {
        return "Tipo de conversão inválido!";
    }
}

echo converteTemperatura(22, 'c-to-f') . " Fahrenheit"; 

echo converteTemperatura(82, 'f-to-c') . " Celsius";