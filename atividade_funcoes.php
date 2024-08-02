<?php

$lista = [24,69,21,12,7];

function maiorValor($lista){
    $maior = $lista[0];
    foreach($lista as $numero){
        if($numero > $maior){
            $maior = $numero;
        }
    }
    return $maior;
}
$lista = [24,69,12,21,12,7];
echo " <br> O maior valor da lista é:" . maiorValor($lista);

function menorValor($lista){
    $menor = $lista[0];
    foreach($lista as $numero){
        if($numero < $menor){
            $menor = $numero;
        }
    }
    return $menor;
}
echo "<br> O menor valor da lista é:" . menorValor($lista);



function Valormedio($lista){
    $quantidade = null;
    $valores = null;
    foreach($lista as $item){
       $valores +=$item;
       $quantidade+=1;
    }
    $medio = $valores / $quantidade;
    return $medio;

}

echo "<br> O medio da lista é:" . Valormedio($lista);