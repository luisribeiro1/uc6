<?php
# Comando FOR
$soma = 0;

for ($i=1; $i <=5; $i++) {
  $soma+= $i ;
}
echo $soma;
echo "<br>-------------------------------<br>";

#Atividade - Tabuado do 7

$sete = 7;

echo "<h2>Tabuada do $sete</h2>";

for ($i=1; $i<=10; $i++) {
  $resultado = $sete * $i;
  echo "07 x $i = $resultado <br>";
}

echo "<br>-------------------------------<br>";
?>