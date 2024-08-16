<?php

$inteiro = 14;
$float = 22.65;
$decimal = 23.84;
$texto = "125.89";

# Casting ou Conversão de tipo:
$texto = (int)$texto;

echo $texto;
echo gettype($texto);

echo "<br>---------------------------<br>";

echo "<br>Maior Valor: ". max(56,41,21,89,10);
echo "<br>Menor valor: ". min(56,41,21,89,10);
echo "<br>Arrendondar para cima: ". ceil(3.3);
echo "<br>Arrendondar para baixo: ". floor(3.7);
echo "<br>Arrendondar para o inteiro mais proximo: ". round(3.4);

$numero = 1253652.253199;
# number_format(numero,casa descimais,esparador decimal,separador de milhar)
echo "<br>Formatar números: ". number_format($numero,2,",",".");

if(is_int($numero)){
    echo "<br> o número é inteiro";
}else{
    echo "<br> o número <strong>NÃO</strong> é inteiro";
}




