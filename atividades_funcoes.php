<?php

$valores = [32,21,9,44,14,19,13,59,16];

function maiorValor($lista){
    $maior = $lista[0];
    foreach($lista as $numero){
        if($numero > $maior){
            $maior = $numero;

        }
    }
    return $maior;

}

echo "<br> o maior valor da lista é : " . maiorValor($valores);

$valores = [32,21,9,44,14,19,13,59,16];

function menorValor($lista){
    $menor = $lista[0];
    foreach($lista as $numero){
        if($numero < $menor){
            $menor = $numero;

        }
    }
    return $menor;

}

echo "<br> o menor valor da lista é : " . menorValor($valores);

echo "<br> o maior valor da lista é : " . maiorValor($valores);

$valores = [32,21,9,44,14,19,13,59,16];

function valorMedio($lista){
    $soma = 0;
    $quantidade = 
    count($lista);

    foreach($lista as $numero){
        $soma + = $numero + x;
        $soma+=x;

        $contar = $contar +1;
        $contar +=1;
        
    

        
    }
    return $valormedio;

}

echo "<br> o menor valor da lista é : " . valorMedio($valores);






