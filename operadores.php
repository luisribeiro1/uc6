<?php

/*
Operadores Matemáticos 
 + (adição)
 - (subtração)
 / (divisão)
 *(multiplicação)
 % (modulo - resto da divisão)

 Formula para porcentagem
  500 * 20 / 100 = 100 
  500 * 0,20 = 100

*/

$numero = 650;
$percentual = 17;

//usando o primeiro exemplo
$resultado = $numero * $percentual / 100; 
echo $resultado . "<br>";

//usando o segundo exemplo
$percentual = $percentual / 100;
$resultado = $numero * $percentual;
echo $resultado;

echo "<br>----------------------------<br>";
/*
Operadores lógicos
&& and
|| or

operadores de comparação
= (atribuição)
== (compara valor)
=== (compara valor e tipo)
!= (diferente)
> (maior)
>= (maior ou igual)
< (menor)
<= (menor ou igual)
*/ 

$a = 5; 
$b = "5";
var_dump($a === $b);

# somar um valor 
$valor = $valor + x;
$valor+=x;

$contar = $contar + 1;
$contar +=1;