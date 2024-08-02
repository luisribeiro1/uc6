<?php

# Função que não retorna valor
function soma(){
    $resultado = 25 + 44;
    echo $resultado;
}

soma();
echo "<br>-----------------------<br>";

# Função que retorna valor
function multiplicacao() {
    $resultado = 41 * 9;
    return $resultado;
}

echo multiplicacao();

echo "<br>-----------------------<br>";

# Função que recebe parâmetros
function outraSoma($numero1, $numero2){
    $resultado = $numero1 + $numero2;
    return $resultado;
}

echo outraSoma(23,89);
echo "<br>-----------------------<br>";

# Função que recebe parâmetros e o segundo parâmetro é opcional e o valor 10 será usado
# quando o segundo valor não for informado
function maisSoma($numero1, $numero2 = 10){
    $resultado = $numero1 + $numero2;
    return $resultado;
}

echo maisSoma(multiplicacao());