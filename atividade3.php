<?php


$lista = [11,25,5,33,51,9,12];


function maiorValor($lista){
    
    $maior = $lista[0];
    foreach($lista as $item){
        if($item > $maior){
            $maior = $item;
        } 
    }
    return $maior;
}
echo "maior valor é: " . maiorValor($lista);

echo "<br> ==============<br>";

function menorValor($lista){
    
    $menor = $lista[0];
    foreach($lista as $item){
        if($item < $menor){
            $menor = $item;
        } 
    }
    return $menor;
}
echo "maior valor é: " . menorValor($lista);

echo "<br> ==============<br>";

function valorMedio($lista){
    $resultado = null;
    $medio = null;
    foreach($lista as $item){
        $resultado = $resultado + $item;
        $medio = $medio + 1;
    }
    $valormid = $resultado / $medio;

    return $valormid;
}
echo  "Valor Medio é :" . number_format(valorMedio($lista),3);