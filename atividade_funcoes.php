<?php

// 10-21-41-56-89

 $lista = array(56,41,21,89,10);

function maiorValor($lista){
    
    $resultado = $lista[0];

   foreach($lista as $valor){
    if($valor > $resultado){
        $resultado = $valor;
    }
    }
    return $resultado;
}

echo "O número Maior é: " . maiorValor($lista) . "<br>";

function menorValor($lista){
    
    $resultado = $lista[0];

   foreach($lista as $valor){
    if($valor < $resultado){
        $resultado = $valor;
    }
    }
    return $resultado;
}

echo "O número Menor é: " . menorValor($lista) . "<br>";

function medioValor($lista){
        
    $resultado = $lista[0];

    $soma = 0;
    $contar = 0;

    foreach($lista as $valor){
         $soma = $soma + $valor;
         $contar+=1;
     }

     $resultado = $soma / $contar;

     return $resultado;

}

echo "O número Médio é: " . medioValor($lista) . "<br>";


