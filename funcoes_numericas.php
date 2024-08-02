<?php

$inteiro = 14;
$float = 22.65;
$decimal = 23.84;
$texto = "125.89";

# Casting ou conversão de tipo
$texto = (float)$texto;

echo gettype($texto);

echo "<br>------------<br>";

echo "<br>Maior valor: " . max(56,41,21,89,10);
echo "<br>Maior valor: " . min(56,41,21,89,10);
echo "<br>Arredondar para maior: " . ceil(3.3);
echo "<br>Arredondar para menor: " . floor(3.6);
echo "<br>Arredondar para inteiro mais próximo: " . round(3.5);

$numero = 3000.302020;
# number_format(numero, casas decimais, separador decimal, separador de milhar)
echo "<br>Formatar números: " . number_format($numero,2, ",",".");

if(is_int($inteiro)){
    echo "<br> $inteiro É inteiro";
}else{
    echo "<br>Não é inteiro";
}