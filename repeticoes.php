<?php

# Comando FOR
$soma = 0;
for($i=1; $i<=5; $i++){
    $soma = $soma + $i;
}

echo $soma;

echo "<br>-----------------------<br>";

# ATIVIDADE

# Tabuada do 7

/*
7x1 = 7
7x2 = 14
7x3 = 21
*/


$inteiro = 7;
for($i=0; $i<=10; $i++){
    $tabuada = $inteiro *$i;
    echo "$inteiro x $i = $tabuada<br>";
}

echo "<br>-----------------------<br>";
# FOREACH

$lista = [3,6,7,10,13,17,20,21,25,32];   //Array

foreach($lista as $item){

    $resto = $item % 2;     //módulo ou resto da divisão
    
    $pi = $resto ? "Ímpar" : "Par";


    echo "o número $item é $pi, pois o resto da divisão é $resto. Linha: 42 <br>";
}