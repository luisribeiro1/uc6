<?php

/* Operadores matemáticos

+ (adição)
- (subtração)
/ (divisão)
* (multiplicação)
% (módulo - resto da divisão)

Fórmula para Porcentagem:
(500 * 20)/100 = 100
500 * 0.2 = 100
*/
$numero = 650;
$percentual = 17;
$resultado = $numero * $percentual / 100;
echo $resultado."<br>";

$percentual = $percentual / 100;
$resultado = $numero * $percentual;
echo $resultado;