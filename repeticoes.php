<?php

# Comando FOR 
$soma = 0;
for($i=1; $i<=5; $i++){
    $soma = $soma + $i;
}
echo $soma;
# Teste de mesa no Excel

echo "<br>---------------------------<br>";

# Atividade Tabuada do 7
/*
7 x 1 = 7
7 x 2 = 14
7 x 3 = 21
*/

$tabuada = 7;
for($i=1; $i<=10; $i++){ // $i=1(valor do i); $i<=10;(enquanto "i" for menor ou igual a 10); $i++(acrescente +1 à "i") 
    $resultado = $tabuada * $i; // O resultado é igual à $tabuada(7) * $i(1,2,3,4...)
    echo "$tabuada x $i = $resultado<br>";
}

echo "<br>---------------------------<br>";

# FOREACH

$lista = [3,6,7,10,13,17,20,21,25,32];  //array

foreach($lista as $item){

    $resto = $item % 2;     // módulo(mod) ou resto da divisão

    $pi = $resto==0 ? "Par" : "Ímpar";
    // $pi = $resto ? "Ímpar" : "Par";
    echo "O número $item é $pi, pois o resto da divisão é $resto. Linha: 38 <br>";
}

echo "<br>---------------------------<br>";

# WHILE

$x = 1;   //Declarou a variável
while($x <= 10){     //Declarou a condição  // (Enquanto X por menor ou = 10)
    echo "$x <br>";
    
    $x++;   //Encremento
}
