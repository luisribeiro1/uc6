<?php

$inteiro = 14;
$float = 22.65;
$decimal = 23.84;
$texto = "125.89";

# casting ou conversão de tipo
$texto = (float)$texto;

echo gettype($texto);

echo "<br> -------------------------- <br>";

echo "<br>Maior valor:" . max(56,41,21,89,10);
echo "<br>Menor valor:" . min(56,41,21,89,10);
echo "<br>Arrendondar para cima:" . ceil(3.3);
echo "<br>Arrendondar para baixo:" . floor(3.7) ;
echo "<br>Arrendondar para inteiro mais proximo:" . round(3.7) ;


$numero = 1253652.256199;
# number_format(numero,casas decimais,separador decimal,separador de milhar)
echo "<br>Formatar numeros:" . number_format($numero,2,",",".");


