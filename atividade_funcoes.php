<?php



// $lista = [52,39,78,21,84,72];
$numeros = [52,39,78,21,84,72];

function maiorValor($lista) {

    $maior = $lista[0];
    foreach($lista as $valor) {
        if($valor > $maior) {
            $maior = $valor;
        }
    }
    return $maior;
}

function menorValor($lista) {

    $menor = $lista[0];
    foreach($lista as $valor) {
        if($valor < $menor) {
            $menor = $valor;
        }
    }
    return $menor;
}

function valorMedio($lista) {
    $soma = null;
    $media = null;
    foreach($lista as $valor) {
        $soma = $soma + $valor;
        $media = $media + 1;
    }
    $valorMedio = $soma / $media;
    return $valorMedio;
}

echo "Lista: 52,39,78,21,84,72.";

echo "<br>-----------------------------------<br>";

echo "O maior número é " . maiorValor($numeros);

echo "<br>-----------------------------------<br>";

echo "O menor número é " . menorValor($numeros);

echo "<br>-----------------------------------<br>";

echo "O valor médio é " . valorMedio($numeros);

echo "<br>-----------------------------------<br>";













// function maiorValor($lista = [52,39,78,21,84,72]) {
//     //$lista = [52,39,78,21,84,72];
//     echo "<br>Maior número: " . max($lista);
// }

// function menorValor($lista = [52,39,78,21,84,72]) {
//     //$lista = [52,39,78,21,84,72];
//     echo "<br>Menor número: " . min($lista);
// }

// function valorMedio($lista = [52,39,78,21,84,72]) {
//     $soma = 52 + 39 + 78 + 21 + 84 + 72;
//     $resultado = $soma / 6;
//     echo "<br>Valor Médio: $resultado";
// }

// maiorValor();
// menorValor();
// valorMedio();