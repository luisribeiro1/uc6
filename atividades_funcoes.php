<?php

#Encontrar MAIOR
function maiorValor($lista) {
    # Verifica se a lista está vazia
    if (empty($lista)) {
        return null; 
    }

    # Inicializa o maior número com o primeiro elemento da lista
    $maior = $lista[0]; 

    # Itera sobre a lista para encontrar o maior número
    foreach ($lista as $numero) {
        if ($numero > $maior) {
            $maior = $numero; 
    }

}
    # Retorna o maior número encontrado
     return $maior;
}
$lista = [4,5,7,2,8,10,1];

echo "O maior número é: " . maiorValor($lista);


echo "<br>---------------------------<br>";


#Encontrar MENOR
function menorValor($lista) {
    # Verifica se a lista está vazia
    if (empty($lista)) {
        return null;
    }

    # Inicializa o maior número com o primeiro elemento da lista
    $menor = $lista[0];

    # Itera sobre a lista para encontrar o maior número
    foreach ($lista as $numero) {
        if ($numero < $menor) {
            $menor = $numero;
        }
    }

    # Retorna o maior número encontrado
    return $menor;
}
$lista = [2,4,10,65,32,100];

echo "O menor número é: " . menorValor($lista);


echo "<br>---------------------------<br>";


#Encontrar MÉDIA
function valorMedio($lista) {

    # Verifica se a lista está vazia
    if (empty($lista)) {
        return null;
    }

    # Inicia a soma com o primeiro elemento da lista
    $soma = array_sum($lista);

    # Usando o tamanho do array para dividir
    $divisor = sizeof($lista);

    return $soma/$divisor;

}

$lista = [13,56,41,3,6,7,84,20];

echo "O resultado da soma é: " . valorMedio($lista);




