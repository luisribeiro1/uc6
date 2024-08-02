<?php


soma();
echo"<br>---------------------<br>";

echo multiplicacao();

echo"<br>---------------------<br>";

# passar uma funçao como parametro para outra função
echo outraSoma(multiplicacao());

# Função que não retorna valor
function soma(){
    $resultado = 25 + 44;
    echo $resultado;
}


 # Função que retorna valor
function multiplicacao(){
    $resultado = 41 * 9;
    return $resultado;
}

# Função que recebe parametros. O segundo parametro é opcional e o valor 10 será usado
# quando o segundo parametro não for infornado.
function outraSoma($numero1,$numero2 = 10){
     $resultado = $numero1 + $numero2;
     return $resultado;
}