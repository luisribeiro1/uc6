<?php 

# Comando FOR
 # $soma = 0;
# for($i=1; $i<=5; $i++){
   # $soma = $soma + $i;
#}
 #echo $soma;

# echo"<br>--------------------------<br>";


# Atividade - Tabuada do 7

$Tabuada = 7;


echo "<center><h1>Tabuada do $Tabuada</center></h1>";

for($a=1; $a<=10; $a++){
    $resultado = $Tabuada * $a;
    echo "<center><p>$Tabuada X $a = <strong>$resultado</strong><p></center>";
}

