<?php

$inteiro = 14;
$float = 22.65;
$decimal = 23.84;
$texto = "125.89";

# casting ou conversão de tipo
$texto = (float)$texto;

echo $texto;
echo gettype($texto);

echo "<br>------------------------<br>";

echo "<br>Maior valor : " . max(56,41,21,89,10);
echo "<br>Menor valor : " . min(56,41,21,89,10);
echo "<br>Arredondar para cima : " . ceil(3.3);
echo "<br>Arredondar para baixo : " . floor(3.7);
echo "<br>Arredondar para inteiro mais próximo: " . round(3.7);

$numero = 1253652.253199;
# number_format(numero,casas decimais,separador decinal, separador de milhar )
echo "<br>Formatar números: " . number_format($numero,2,",",".");

if(is_int($numero)){
    echo "<br> o numero é inteiro";

}else{
    echo "<br> o número NÂO é inteiro";
}




