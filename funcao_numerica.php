<?php

use function PHPSTORM_META\map;

$inteiro = 14;
$float = 22.65;
$decimal = 23.84;
$texto = "125.89";

echo gettype($texto);
echo "<br>";

// casting ou conversão de tipo
$texto = (float)$texto;
echo gettype($texto);
echo "<br>---------------------<br>";

echo "<br>Maior Valor: ". max(56,41,58,89,2);
echo "<br>Menr Valor: ". min(56,41,58,89,2);
echo "<br>Arredondar pra cima: ". ceil(3.3);
echo "<br>Arredondar pra baixo: ". floor(3.3);
echo "<br>Arredondar pra o inteiro mais próximo: " . round(3.5);

$numero = 1256365.52499;
// number_format (número, casas decimais, separador decimal, separador milhar)
echo "<br>Formatar Números " . number_format($numero,2, ",", ".");

echo "<br>---------------------<br>";

if(is_int($inteiro)){
  echo "<br>O número é inteiro";
} else {
  echo "<br>O número não é inteiro";
}

$saida = is_int($numero) ? "inteiro" : "não inteiro";
echo "<br> $saida";

echo "<br>---------------------<br>";
