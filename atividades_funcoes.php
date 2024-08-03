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


echo "<br>---------------------------------------------------------------<br>";


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


echo "<br>---------------------------------------------------------------<br>";


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

echo "<br>---------------------------------------------------------------<br>";

# Número por extenso
function numeroPorExtenso($numero){
    $extenso = "";

    $unidades = ['zero','um','dois','três','quatro','cinco','seis','sete','oito','nove'];
    $especiais = ['dez','onze','doze','treze','quatorze','quinze','dezesseis','dezesete','dezoito','dezenove'];
    $dezenas = ['','','vinte','trinta','quarente','cinquenta','sessenta','setenta','oitenta','noventa'];

    if($numero < 10){
        $extenso = $unidades[$numero];
    }
    elseif($numero < 20){
        $extenso = $especiais[$numero - 10];
    }
    elseif($numero < 100){
        $dezena = (int)($numero / 10);  # forçar um número inteiro
        $resto = $numero % 10;          # % módulo. Usado para obter o resto da divisão
        // echo "<br>" . $dezena;
        // echo "<br>" . $resto;

        $complemento = "";
        if($resto > 0){
            $complemento = " e " . $unidades[$resto];
        }
        $extenso = $dezenas[$dezena] . $complemento;
    }
    else{
        $extenso = "O número é superior a 99";
    }
    return $extenso;
}

echo "O número por extenso é: " . numeroPorExtenso(125);

echo "<br>---------------------------------------------------------------<br>";

# Invertendo Data

function dataInvertida($data, $tipoDeConversao) {
    switch ($tipoDeConversao) {
        case 'paraISO':
            $parts = explode('/', $data);
            if (count($parts) === 3) {
                $dia = $parts[0];
                $mes = $parts[1];
                $ano = $parts[2];
                return "$ano-$mes-$dia";
            } else {
                return false; 
            }
        
        case 'paraBR':
            $parts = explode('-', $data);
            if (count($parts) === 3) {
                $ano = $parts[0];
                $mes = $parts[1];
                $dia = $parts[2];
                return "$dia/$mes/$ano";
            } else {
                return false; 
            }
        
        default:
            return false; 
    }
}

echo dataInvertida('02/08/2024', 'paraISO');
echo "<br>";
echo dataInvertida('2024-08-02', 'paraBR');

echo "<br>---------------------------------------------------------------<br>";

#

function converteTemperatura($temperatura, $tipoDeConversao){
    if($tipoDeConversao === 'celsiusParaFahrenheit'){
        return ($temperatura * 9/5) + 32;
    }
    elseif ($tipoDeConversao === 'fahrenheitParaCelsius'){
        return ($temperatura - 32) * 5/9;
    }
    else {
        return 'Tipo de conversão inválido';
    }
}

echo converteTemperatura(32, 'celsiusParaFahrenheit');
echo "<br>";
echo converteTemperatura(10, 'fahrenheitParaCelsius');

