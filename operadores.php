<?php

/*
OPERADORES MAATEMÁTICOS
    +   (adição)
    -   (subtração)
    /   (divisão)
    *   (multiplicação)
    %   (módulo - resto da divisão)

FÓRMULA PARA PORCERBTAGEN
    500 * 20 / 100 = 100
    500 * 0.2 = 100

*/
$numero = 650;
$percentual = 17;

# usando o primeiro exemplo:
$resultado = $numero * $percentual / 100;
echo $resultado . "<br>";

echo "<br>-------------------------------------<br>";

# usando o segundo exemplo
$percentual = $percentual / 100;
$resultado = $numero * $percentual;
echo $resultado;

echo "<br>-------------------------------------<br>";

/*
OPERADORES LÓGICOS
    && and
    || or

OPERADORES DE COMPARAÇÃO
    =   (atribuição)
    ==  (comparar valores)
    === (comparar valor e tipo)
    !=  (Diferente)
    >   (maior)
    >=  (Maior ou Igual)
    <   (Menor)
    <=  (Menor ou Igual)

*/

$a = 5;
$b = '5';

var_dump($a == $b);     //Comparar Valor
var_dump($a === $b);    //Comparar Valor e Tipo de variaveis
