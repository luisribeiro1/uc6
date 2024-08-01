<?php


function maiorValor($lista) {
    // Verifica se a lista está vazia
    if (empty($lista)) {
        return null; // Ou você pode retornar um valor padrão ou lançar uma exceção
    }

    // Inicializa o maior valor com o primeiro elemento da lista
    $maior = $lista[0];

    // Percorre a lista para encontrar o maior valor
    foreach ($lista as $valor) {
        if ($valor > $maior) {
            $maior = $valor;
        }
    }

    // Retorna o maior valor encontrado
    return $maior;
}

// Exemplo de uso
$lista = [10, 5, 8, 23, 17];
echo "O maior valor é: " . maiorValor($lista); // Saída: O maior valor é: 23

echo "<Br>------------------------<br>";

function menorValor($lista) {
    if (empty($lista)) {
        return null;

    }

    $menor = $lista[0];

    foreach ($lista as $valor) {
        if ($valor < $menor) {
            $menor = $valor;

        }
    }

    return $menor;

}

$lista = [10, 5, 8, 23, 17];
echo "O menor valor é: " . menorValor($lista); 

echo "<Br>------------------------<br>";

function valorMedio($lista) {
    // Verifica se a lista está vazia
    if (empty($lista)) {
        return null; // Ou você pode retornar um valor padrão ou lançar uma exceção
    }

    // Calcula a soma de todos os valores na lista
    $soma = array_sum($lista);
    
    // Conta o número de elementos na lista
    $quantidade = count($lista);

    // Calcula e retorna o valor médio
    return $soma / $quantidade;
}

// Exemplo de uso
$lista = [10, 5, 8, 23, 17];
echo "O valor médio é: " . valorMedio($lista); // Saída: O valor médio é: 12.6


