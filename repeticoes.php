<?php

# Comando FOR
$soma = 0;
for($i=1; $i<=5; $i++){
    $soma = $soma + $i;
}
echo $soma;


#Atividade
# Tabuada do 7
/*
7 x 1 = 7
7 x 2 = 14
7 x 3 = 21
7 x 4 = 28
*/

echo "<br>-------------------------<br>";

$valor = 7;
for($x=1; $x<=10; $x++){
  $resultado = $valor * $x;
  echo "$valor x $x = $resultado <br>";
}

echo "<br>-------------------------<br>";


#for Each 
$lista = [3, 6, 7, 10, 13, 17, 20, 21, 25, 32]; //array

foreach($lista as $item){

  $resto = $item % 2;      // módulo ou resto da divisão 

  $pi = $resto == 0 ? "Par" : "impar"; 
  // $pi = $resto ? "impar" : "Par"; 
  
  // echo "$item -$resto <br>";
  echo "o número $item é $pi, pois o resto da dvisão é $resto. Linha: 42 <br>";
}


echo "<br>-------------------------<br>";


# WHIlE

$x = 1;
while($x <= 10 ){
  echo "$x <br>";

  $x++;
}