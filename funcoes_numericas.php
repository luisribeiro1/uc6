<?php

$inteiro = 14;
$float = 22.65;
$decimal = 23.84;
$texto = "125.89";


# casting ou conversão de tipo
$texto =(float) $texto;


echo gettype($texto);


echo "<br>=============<br>";

echo "<br> Maior valor: " . max(56,41,21,89,10);
echo "<br> Maior valor: " . min(56,41,21,89,10);
echo "<br> Arredondamento para cima: " . ceil(3.5);
echo "<br> Arredondamento para baixo: " . floor(3.7);
echo "<br> Arredondamento para o inteiro mais próximo: " . round(3.1);

$numero = 1253652.253199; 
# number_format(numero,casas decimais,separador decimal, separador de milhar)
echo "<br> Formatar números; " . number_format($numero,2,",", ".");

if(is_float($numero)){
    echo "<br> o número é inteiro";
}else {
    echo "<br> o número NÃO é inteiro";
}