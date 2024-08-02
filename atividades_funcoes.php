<?php


$lista = [3,24,74,58,46];

function maiorValor($lista){
    $maior = $lista[0];
foreach($lista as $numero){
if($numero > $maior){
    $maior = $numero;
}
}
return $maior;
}
echo "<br>O maior valor da lista é: " . maiorValor($lista);



function menorValor($lista){
    $menor = $lista[0];
foreach($lista as $numero){
if($numero < $menor){
    $menor = $numero;
}
}
return $menor;
}
echo "<br>O menor valor da lista é: " . menorValor($lista);


function valorMedio($lista){
    $valores = null;
    $quantidade = null;   
foreach($lista as $item){
$valores +=$item;
$quantidade+=1;
}
$medio = $valores / $quantidade;
return $medio;
}
echo "<br>O valor medio da lista é: " . valorMedio($lista);












