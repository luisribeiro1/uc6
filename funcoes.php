<?php

#soma();

echo multiplicar();
echo "<br>-------------<br>";
# Passar uma função como parâmetro para outra função 

echo outraSoma(multiplicar());
# função que não retorna valor
function soma(){
    $resultado = 25 + 44;
    echo $resultado;
}

# função que retorna valor
function multiplicar(){
    $resultado = 41 * 9;
    return $resultado;
}

# Função que recebe parâmetros. O segundo parâmetro é opcional e o valor 10 será usado quando o segundo parâmetro não for informado
function outraSoma($numero1, $numero2 = 10){
    $resultado = $numero1 + $numero2;
    return $resultado;
}


