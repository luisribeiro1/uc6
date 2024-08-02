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
#FOREACH    
$lista = [3, 6, 7, 10, 13, 17, 20, 21, 25, 32]; //Array 

foreach($lista as $item){
    
    $resto = $item %  2; //Mod ou modulo ou resto da divisao

    #echo "$item - $resto <br>";

    #$pi = $resto ==0 ? "Par" : "Ímpar";
    $pi = $resto  ? "Ìmpar" : "Par";
    
    echo "O número $item é $pi, pois o resto da divisão é $resto. Linha: 41 <br>";

}

#WHILE

$x = 1;
while($x <= 10){
    echo "$x <br>";
    
    $x++;
}
?>