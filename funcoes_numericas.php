<?php

$inteiro = 24;
$float = 22.65;
$decimal = 23.84;
$texto = "125,89";

# casting ou conversão do tipo
$texto = (float)$texto;

echo gettype($texto);

echo "<br>Maior valor : " . max(56,41,21,89,10);
echo "<br>Menor valor : " . min(56,41,21,89,10);
echo "<br>Arredondar pra cima: " . ceil(3.3);
echo "<br>Arredondar pra baixo : " . floor(3.7);
echo "<br>Arredondar para o inteiro mais proximo: " . round(3.1);

echo "<br>Formatar números: " . number_format($numero,2);


