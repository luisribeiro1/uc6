<?php
/*
 Operadores matematicos
 + (adição)
 - (subtração)
 / (divisão)
 * (multiplicaçaõ)
 % (modulo - resto da divisão)

 Formula para porcetagem:
 500 * 20 / 100 = 100
 500 * 0.2 = 100
 */

 $numero = 650;
 $percentual = 17;

// Usando o primeiro exemplo
 $resultado = $numero * $percentual / 100;
 echo $resultado . "<br>";

 // Usando o segundo exemplo
 $percentual = $percentual / 100;
 $resultado = $numero * $percentual / 100;
 echo $resultado;


 echo "<br>-------------------------<br>";

 /*
 Operadores Logicos
 && and
 || or

 Operadores de comparação
 = (atribuição)
 == (comparar valor)
 === (comparar valor e tipo)
 != (diferente)
 > (maior)
 >= (maior ou igual)
 < (menor)
 <= (menor ou igual)
 */

 $a = 5;
 $b = "5";

 var_dump($a === $b);