<?php

echo "Olá";

echo "<br>-----<br>";

soma();

echo "<br>-----<br>";

echo multiplicacao();

echo "<br>-----<br>";

# Passar uma função como parâmetro para outra função.
echo outraSoma(multiplicacao());

echo "<br>-----<br>";

# Função que não retorna valor.
function soma() {
    $resultado = 25 + 45;
    echo $resultado;
}

# Função que retorna o valor.
function multiplicacao() {
    $resultado = 42 * 9;
    return $resultado;
}

# Função que recebe parâmetros. O segundo parâmetro é opcional e o valor 10 será usado quando o segundo parâmetro não for informado 
function outraSoma($numero1,$numero2 = 10) {
    $resultado = $numero1 + $numero2;
    return $resultado;
}