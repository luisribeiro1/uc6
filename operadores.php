<?php

/* operadores matémáticos
    + (adição)
    - (subtração)
    / (divisão)
    * (multiplicação)
    % (módulo - resto da divisão)

    Fórmula para porcentagem:
    500 * 20 / 100 = 100
    500 * 0.2 = 100
*/
$numero = 650;
$percentual = 17;

//Usando o primeiro exemplo
$resultado = $numero * $percentual / 100;
echo $resultado . "<br>";

// Usando o segundo exemplo
$percentual = $percentual / 100;
$resultado = $numero * $percentual;
echo $resultado;

/*
Operadores Lógicos
&& and 
|| or

Operadores de comparação 
=      (Atribuição)
!=     (Compara valor)
===    (Compara valor e tipo)
!=     (Diferente)
>      (Maior)
>=     (Maior ou igual)
<      (Menor)
<=     (Menor ou igual)
*/

$a = 5;
$b = "5";

echo"<br>--------------------------<br>";

var_dump($a == $b);

echo"<br>";
var_dump($a === $b);
