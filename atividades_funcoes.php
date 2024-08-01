<?php

function maiorValor($lista) {
    // Verifica se a lista está vazia
    if (empty($lista)) {
        return null;
    }

    // Inicializa o maior número com o primeiro elemento da lista
    $maiorNumero = $lista[0];

    // Itera sobre a lista para encontrar o maior número
    foreach ($lista as $numero) {
        if ($numero > $maiorNumero) {
            $maiorNumero = $numero;
        }
    }

    // Retorna o maior número encontrado
    return $maiorNumero;
}

$lista = [19,22,69,32,36,54,98,24,34];
echo "O maior número é: " . maiorValor($lista);

echo "<br>-----------------------------------------------------<br>";

function menorValor($lista){
    
    //Verifica se a lista está vazia
    if (empty($lista)) {
        return null;
    }

    // Inicia o menor número com o primeiro elemento da lista
    $menorNumero = $lista[0];

    // Itera sobre a lista para encontrar o menor número
    foreach ($lista as $numero) {
        if($numero < $menorNumero) {
            $menorNumero = $numero;
        }
    }

    // Retorna o menor número encontrado
    return $menorNumero;
}

$lista = [19,22,69,32,36,54,98,24,34];
echo "O menor número é: " . menorValor($lista);
echo "<br>-----------------------------------------------------<br>";

function valorMedio($lista){

    // Verifica se a lista está vazia
    if(empty($lista)) {
        return null;
    }

    // Inicia a soma com o primeiro elemento da lista
    $soma = array_sum($lista);

    // Usando o tamanho do array para dividir
    $divisor = sizeof($lista);


    return $soma/$divisor;
}

$lista = [19,22,69,32,36,54,98,24,34];

echo "O resultado da soma é: " . number_format(valorMedio($lista),2);