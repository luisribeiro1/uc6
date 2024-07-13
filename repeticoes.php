<?php 

# Comando FOR
$soma = 0;
for($i=1; $i<=5; $i++){
    $soma = $soma + $i;
}
echo $soma;

echo "<br>-------------------------<br>";



for($i=1;$i <= 10; $i++){
    $resultado = 7 * $i;
    echo "7 x $i = $resultado<br>";
}

echo "<br>-------------------------<br>";

$lista = [3,6,7,10,13,17,20,21,25,32];        // Array

foreach($lista as $item){

    $resto = $item % 2;        // modulo ou resto da divisao

    $pi = $resto == 0 ? "par" : "impar";

    echo "O numero $item é $pi, pois o resto da divisão é $resto, linha: 292 <br>";
  
}

echo "<br>-------------------------<br>";

# WHIRE
$x = 1;
while($x <= 10){
    echo "$x <br>";

    $x++;
}




















# Atividade
# Tabuada do 7

