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

echo"<center>--------------------------<br></center>";

#FOREACH

$lista = [3, 6, 7, 10, 13, 17, 20, 21, 25, 32];  //Array

foreach($lista as $item){
    
    $resto =  $item % 2; //Módulo ou resto da divisão

    $pi = $resto==0 ? "Par" : "Ímpar";
    //$pi = $resto ? "Ímpar" : "Par";
   // echo"<br><center>$item - <strong> $resto </strong> <br></center>";
   
   echo"<br><center>O número $item é <strong> $pi, </strong> pois o resto da divisão é <strong> $resto. </strong>Linha: <strong> 39 </strong><br></center>" ;
}

echo"<br><center>--------------------------<br></center>";

#WHILE

$x = 1;

while($x <= 10){
    echo "<center>$x <br></center>";

    $x++;
}



