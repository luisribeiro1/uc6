<?php

# comando FOR
$soma = 0;
for($i=1; $i<=5; $i++){
    $soma = $soma + $i;
}
echo $soma;

echo "<br>----------------------------<br>";


# Atividade  
# Tabuada do 7
/*
7x1=7
7x2=14
7x3=21
*/

for($i = 1; $i  <= 10; $i++){
    $resultado = 7 * $i;
    echo "7 x $i = $resultado<br>";
    

}

echo "<br>----------------------------<br>";

# FOREACH

$lista = [3, 6, 7, 10, 13, 17, 20, 21, 25, 32];   // Array

foreach($lista as $item){

    $resto = $item % 2;    // módulo ou resto da divisão

   // echo "$item - $resto <br>";

   //$pi = $resto == 0 ? "Impar" : "Par";
   $pi = $resto == 0 ? "Par" : "Impar";

   echo "o numero $item é $pi, pois o resto da divisão é $resto linha 43 <br>";


}

echo "<br>----------------------------<br>";

 # WHILE
$x = 1 ;
while($x <= 10){
    echo "$x <br>";

    $x++;

}

