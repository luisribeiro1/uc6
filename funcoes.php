<?php

soma();
echo "<br>-----------------------<br>";

echo multiplicacao();
echo "<br>-----------------------<br>";

# Passar uma função como parâmentro para outra função
echo outraSoma(multiplicacao());

# Função que não retorna falor
function soma(){
    $resultado = 25 + 44;
    echo $resultado;
}

# Função que retorna valor
function multiplicacao(){
    $resultado = 41 * 9;
    return $resultado;
}

# Função que recebe parâmentros. O segundo parâmetro é opcional
# e o valor 10 sera usado quando o segundo parâmetro n for informado
function outraSoma($numero1,$numero2 = 10){
    $resultado = $numero1 + $numero2;
    return $resultado;
}