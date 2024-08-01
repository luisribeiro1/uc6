<?php

soma();
echo "<br>--------------------------<br>";

echo multiplicacao();

echo "<br>--------------------------<br>";
echo outraSoma(multiplicacao());

# função que não retorna valor
function soma(){
    $resultado = 25 + 44;
    echo $resultado;
}
# função que retorna valor
function multiplicacao(){
    $resultado = 41 * 9;
    return $resultado;
}

# função que recebe parâmetros. o segundo parâmetro é opcional e o valor 10 sera sado qundo o segundo parâmetro nao for informado
function outraSoma($numero1,$numero2 = 10){
    $resultado = $numero1 + $numero2;
    return $resultado;

}