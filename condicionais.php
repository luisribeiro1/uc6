<?php
# IF forma básica
$numero = 35;
$letra = 'a';

if($numero == 35 && $letra == 'a') {     /* && AND, || OR */
  echo "faça alguma coisa $numero";
}
echo "<br>-------------------------------<br>";

# IF com ELSE
if($numero > 30) {
  echo "é maior que 30";
} else {
  echo "é meno que 30";
}
echo "<br>-------------------------------<br>";

# IF com muitiplos IFs
if ($numero <= 30) {
  echo "é menor que 30";
} elseif ($numero == 30){
  echo "é igual a 30";
} else {
  echo "é maior que 30";
}
echo "<br>-------------------------------<br>";

#IF com operador ternário
$saida = $numero > 30 ? "maior que 30" : "menor que 30";
echo $saida;

echo "<br>-------------------------------<br>";

# Condicionais com SWITCH
$dia = 1;

switch ($dia) {
  case 1:
    echo 'domingo';
    break;
  case 2:
    echo 'segunda';
    break;
  case 3:
    echo 'terça';
    break;
  case 4:
    echo 'quarta';
    break;
  case 5:
    echo 'quinta';
    break;
  case 6:
    echo 'sexta';
    break;
  case 7:
    echo 'sábado';
    break;

  default:
    echo "não é um dia da semana!";
    break;
}
echo "<br>-------------------------------<br>";

# Condicionais com switch e teste de condições
$nota = 0;

switch (true) {
  case ($nota >= 9):
    echo "Nota <b>A</b>";
    break;
  case ($nota >= 7);
    echo "Nota <b>B</b>";
    break;
  case ($nota >= 5);
    echo "Nota <b>C</b>";
    break;
  case ($nota < 5 && $nota >= 1);
    echo "Nota <b>D</b>";
    break;
  case ($nota == 0);
    echo "Nota <b>E</b>";
    break;
  default:
  echo "<b>Não é uma nota válida.</b>";
  break;
}
echo "<br>-------------------------------<br>";

?>