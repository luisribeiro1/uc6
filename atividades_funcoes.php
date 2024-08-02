<?php

#Maior valor

$lista = [56,41,21,89,10];


function maiorValor($lista) {

    $maior = $lista[0];
 
    foreach($lista as $resultado){
    
        if($resultado > $maior){
            $maior = $resultado;
        }
    }
    
    return $maior;
}

echo "O maior número é " . maiorValor($lista);

echo "<br>";

#Menor valor

$lista2 = array(99,2,9,90,12);


function menorValor($lista2) {

    $menor = $lista2[0];
 
    foreach($lista2 as $resultado2){
    
        if($resultado2 < $menor){
            $menor = $resultado2;
        }
    }
    return $menor;

}

echo "O menor número é  " . menorValor($lista2);

echo "<br>";

#Valor médio 

$lista3 = array(70,23,1,509,100);
// 1,23,70,100,509,

function medioValor($lista3) {

    $soma = 0;
    $contar = 0;
    $medio = $lista3[0];
    
    foreach($lista3 as $resultado3){
    
            $soma = $soma + $resultado3;
            $contar +=1;
    }
    $calculo = $soma / $contar;

    return $calculo;

}

echo "O valor médio é  " . medioValor($lista3);



