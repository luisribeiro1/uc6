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

