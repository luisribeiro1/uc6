<?php

function maiorValor($lista){
    // Verificar se a lista está vazia
    if(empty($lista)){
        return null;
    }
    $maiorValor = $lista[0];

    foreach ($lista as $number){
        if($number > $maiorValor){
            $maiorValor = $number;
        }
    }
    return $maiorValor;
}

$lista = [7,10,17,45,89,90,98];
echo "O maior valor é: " . maiorValor($lista);
echo "<br>------------------------<br>";

function menorValor($lista){
    // Verificar se a lista está vazia
    if(empty($lista)){
        return null;
    }
    $menorValor = $lista[0];

    foreach ($lista as $number){
        if($number < $menorValor){
            $menorValor = $number;
        }
    }
    return $menorValor;
}

$lista = [7,10,17,45,89,90,98];
echo "O menor valor é: " . menorValor($lista);
echo "<br>------------------------<br>";

function valorMedio($lista){
    // Verificar se a lista está vazia
    if(empty($lista)){
        return null;
    }
    $soma = array_sum($lista);
    $quantidade = count($lista);

    return $soma / $quantidade;
    
}
$lista = [7,10,17,45,89,90,98];
echo "o valor Médio é: " . number_format (valorMedio($lista),2);