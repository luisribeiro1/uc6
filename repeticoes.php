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

?>

