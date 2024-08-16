<?php

 # Comando FOR
$soma = 0;
for($i=1; $i<=5; $i++){
    $soma = $soma + $i;
}
    echo $soma;

echo "<br>-----------------------<br>";

# Atividade, Tabuada do 7

$numero = 7;
echo "<h2>Tabuada do <strong>$numero</strong></h2>
<br>";

 for($t=1; $t<=10; $t++){
    $resultado = $numero * $t;
    
        echo "<p>$numero X $t = <strong>$resultado</strong></p>";
 }

 echo "<br>-----------------------<br>";

# FOREACH 

$lista = [3, 6, 7, 10, 13, 17, 20, 21, 25, 32];  // Array
foreach($lista as $item){

    $resto = $item % 2;                         // Módulo ou Resto da divisão

    # $pi = $resto==0 ? "Par" : "Ímpar";          // Ternalio
      $pi = $resto ? "Ímpar" : "Par";

    echo "<br> O número <strong>$item</strong> é <strong>$pi</strong>, pois o resto da divisão é <strong>$resto</strong>. Linha: 36 <br>";
}

# While

$x = 1;
while ($x <=10){
    echo "$x <br>";

    $x++;
}