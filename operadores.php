<?php

/*
Operadores matemáticos
+ (adição)
- (subtração)
/ (divisão)
* (multiplicação)
% (módulo - resto da divisão)

Fómula da Porcentagem
500 * 0.2= 100
*/

$numero = 650;
$percentual = 17;

//Usando o primeiro exemplo
 $resultado = $numero * $percentual / 100;
echo $resultado .  "<br>";

// Usando o segundo exemplo
$percentual = $percentual / 100;
$resultado = $numero * $percentual;
echo $resultado;

echo "<br>---------------------<br>";

/* Operadores Lógicos 
&& and
|| or

Operadores de Comparação
= (atribuição)
== (compara valor)
=== (compara valor e tipo)
!= (diferente)
> (maior)
>=(maior ou igual)
< (menor)
<= (menor ou igual)
*/
$a = 5;
$b = "5";

var_dump ($a == $b);