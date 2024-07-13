<?php 

/*
Operadores Matemáticos 
+ (Adição)
- (subtração)
/ (divisão)
* (multiplacação)
% (módulo -resto da divisão)

Formula para porcentagem:
500 * 20 / 100 = 100
500 * 0.2 = 100
*/

$numero = 650;
$percentual = 17;
// Usando o primeiro exemplo
$resultado = $numero * $percentual / 100;

echo $resultado. "<br>";

// Usando o segundo exemplo
$percentual = $percentual / 100;

$resultado = $numero * $percentual ;
echo $resultado. "<br>";

echo "<br>-------------------------<br>";

/* 
Operadores Lógicos 
&& and 
|| or 

Operadores de comparação
=   (atribuição)
==  (compara valor)
=== (compara valor e tipo "string,int,bool" )
!=  (diferente)
>   (maior)
>=  (maior ou igual)
<   (menor)
<=  (menor ou igual)


*/

$a = 5; //int
$b = "5"; //string

var_dump($a === $b);


echo "<br>-------------------------<br>";
