<?php

$inteiro = 14;
$float = 22.65;
$decimal = 23.84;
$texto = "125.89";

# casting conversão de tipo
$texto = (float)$texto;

echo gettype($texto);
echo "<br>" . $texto;

echo "<br>------------------------<br>";

echo "<br> Maior valor: " . max(56,41,21,89,10);
echo "<br> Menor valor: " . min(56,41,21,89,10);
echo "<br> Arredondamento para cima: " . ceil(3.3);
echo "<br> Arredondamento para baixo: " . floor(3.7);
echo "<br> Arredondamento para inteiro mais próximo: " . round(3.5);

$numero = 1253652.256199;
# number_format(numero,casas decimais, separador decimal, separador de milhar)
echo "<br> Formatar números: " . number_format($numero,2,",",".");

if(is_int($numero)){
    echo "<br> O número é inteiro";
}else{
    echo "<br> O número não é inteiro";
}