<?php

echo "olá <br>";

soma();
echo "<br>-----------------<br>";

echo multiplicacao();

echo "<br>-----------------<br>";

# passar uma função como parametro para outra função 
echo outraSoma(multiplicacao());

# funçao que não retorna valor

function soma(){
    $resultado = 25 + 44;
    echo $resultado;
}

# função que retorna valor
function multiplicacao(){
    $resultado = 41 * 9;
    return $resultado;
}

# função que recebe parâmetros. O segundo parâmetro é opcional eo valoe 10 será usado 
# quando o segundo parâmetro não for informado.
function outraSoma($numero1 ,$numero2 = 10){
    $resultado = $numero1 + $numero2 ;
    return $resultado;

}
