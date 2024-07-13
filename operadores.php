<?php

/* Operadores mátematicos 
+ (adição) 
- (subtração)
/ (divisão)
* (multiplicação)
% (módulo - resto da divisão)


Formula para porcentagem
500 * 20 / 100 = 100
500 / 0.2 = 100
*/


$numero = 650;
$percentual = 17;

// Exemplo 1
$resultado = $numero * $percentual / 100;
echo $resultado . "<br>";

// Exemplo 2
$percentual = $percentual / 100;
$resultado = $numero * $percentual;
echo $resultado;

echo "<br>--------------------</br>";


/*
Operadoers lógicos
&& and
|| or 


Operadores de comparação 
= (atribuição) 
== (compara valor)
=== (compara valor e tipo)
!= (diferente)
< (menor)
> (maior)
>= (maior ou igual)
=< (menor ou igual)
*/


$a = 5;
$b = "5";

var_dump($a === $b);
