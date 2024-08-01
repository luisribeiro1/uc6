<?php
# Comando FOR
$soma = 0;

for ($i=1; $i <=5; $i++) {
  $soma+= $i ;
}
echo $soma;
echo "<br>----------------------------------------<br>";

#Atividade - Tabuado do 7

$sete = 7;
echo "<h2>Tabuada do $sete</h2>";

for ($i=1; $i<=10; $i++) {
  $resultado = $sete * $i;
  echo "$sete x $i = $resultado <br>";
}
echo "<br>----------------------------------------<br>";

# Comando FOREACH

$lista = [3, 6, 7, 10, 13,17, 20, 21, 25, 32];   // array

foreach ($lista as $item) {
  $resto = $item % 2;       // módulo ou resto da divisão

  $pi = $resto ? 'impar' : 'par';
  // $pi = $resto == 0 ? 'par' : 'impar';

  echo "o número $item é $pi, pois o resto da divisão é $resto <br>";
};
echo "<br>---------------------------------------<br>";

# Comando WHILE

$x = 1;
while ($x <= 10) {
  echo "$x <br>";

  $x++;
}
echo "<br>---------------------------------------<br>";

?>