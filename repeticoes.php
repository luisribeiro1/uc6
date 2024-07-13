<?php

# Comando FOR
$soma = 0;
for($i=1; $i<=5; $i++){
    $soma = $soma + $i;
}
echo $soma;

echo "<br>-------------------<br>";

# Atividade - Tabuada do 7
/*
7 x 1 = 7
7 x 2 = 14 
7 x 3 = 21
*/

echo "<br>-------------------<br>";

# FOREACH

$lista = [3, 6, 7, 10, 13, 17, 20, 21, 25, 32];     // Array

foreach($lista as $item){

    $resto = $item % 2;         // módulo ou resto da divisão

    $pi = $resto==0 ? "Par" : "Ímpar";
    // $pi = $resto ? "Ímpar" : "Par";

    echo "O número $item é $pi, pois o resto da divisão é $resto. Linha: 32 <br>";
}

echo "<br>-------------------<br>";


# WHILE
$x = 1;
while($x <= 10){
    echo "$x <br>";

    $x++;
}








