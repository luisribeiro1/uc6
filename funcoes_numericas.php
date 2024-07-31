<?php

$inteiro = 14;
$float = 22.65;
$decimal = 23.84;
$texto = "125.89";

# Casting ou conversão de tipo
$texto = (float)$texto;

echo gettype($texto);
echo "<br>" . $texto;

echo "<br>--------------------------<br>";

echo "<br>Maior valor: " . max(56,41,21,89,10);
echo "<br>Menor valor: " . min(56,41,21,89,10);
echo "<br>Arredondar para cima: " . ceil(3.3);
echo "<br>Arredondar para baixo: " . floor(3.7);
echo "<br>Arredondar para o inteiro mais próximo: " . round(3.7);

$numero = 1253652.253199;
# Number_format(número, casas decimais, separador decimal, separador de milhar)
echo "<br>Formatar números: " . number_format($numero,2,",",".");

if(is_int($inteiro)){
    echo "<br> o número é inteiro";
}else{
    echo "<br> o número NÃO é inteiro";
}
