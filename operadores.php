<?php

/*
Operadores matemáticos
+ (adição)
- (subtração)
/ (divisão)
* (multiplicação)
% (módulo - resto da divisão)

Fórmula para porcentagem
500 * 20 / 100 = 100
500 * 0.2 = 100
*/

$numero = 650;
$porcentual = 17;

// Usando o primeiro exemplo
$resultado = $numero * $porcentual / 100;
echo $resultado . "<br>";

// Usando o segundo exemplo
$porcentual = $porcentual / 100;
$resultado = $numero * $porcentual;
echo $resultado;