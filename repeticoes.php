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


