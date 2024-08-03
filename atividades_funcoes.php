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

echo "<br>-------------------------------------<br>";

# Atividade 4

function numeroPorExtenso($numero){
    $extenso = "";

    $unidades = ["zero", "um", "dois", "três", "quatro", "cinco", "seis", "sete", "oito", "nove"];
    $especiais = ["dez", "onze", "doze", "treze", "catorze", "quinze", "dezesseis", "dezessete", "dezoito", "dezenove"];
    $dezenas = ['', '', 'vinte', 'trinta', 'quarenta', 'cinquenta', 'sessenta', 'setenta', 'oitenta', 'noventa'];
    if($numero < 10){
        $extenso = $unidades[$numero];
    }
    elseif($numero < 20){
        $extenso = $especiais[$numero - 10];
    }
    elseif($numero < 100){
        $dezena = (int)($numero / 10); # forçar a ser um número inteiro
        $resto = $numero % 10;
        //echo $dezena;
        //echo "<br>" . $resto;

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

echo "<br> O número por extenso é: " . numeroPorExtenso(101);
echo "<br>----------------------------<br>";

# Atividade 5

function dataInvertida($data, $tipoDeConversao) {
    // Verifica o tipo de conversão
    switch ($tipoDeConversao) {
        case 'paraISO':
            // Formato de entrada: dd/mm/yyyy
            // Formato de saída: yyyy-mm-dd
            $parts = explode('/', $data);
            if (sizeof($parts) === 3) {
                // A data está no formato dd/mm/yyyy
                $dia = $parts[0];
                $mes = $parts[1];
                $ano = $parts[2];
                return "$ano-$mes-$dia";
            } else {
                return false; // Formato inválido
            }
        
        case 'paraBR':
            // Formato de entrada: yyyy-mm-dd
            // Formato de saída: dd/mm/yyyy
            $parts = explode('-', $data);
            if (sizeof($parts) === 3) {
                // A data está no formato yyyy-mm-dd
                $ano = $parts[0];
                $mes = $parts[1];
                $dia = $parts[2];
                return "$dia/$mes/$ano";
            } else {
                return false; // Formato inválido
            }
        
        default:
            return false; // Tipo de conversão inválido
    }
}

echo dataInvertida('02/08/2024', 'paraISO');
echo "<br>-------------<br>";

# Atividade 6

function converteTemperatura($temperatura,$tipoDeConversao){
    if($tipoDeConversao === 'celsiusParaFahrenheit'){
        // Convertendo de Celsius para Fahrenheit
        return ($temperatura * 9/5) + 32;
    }
    elseif ($tipoDeConversao === 'fahrenheitParaCelsius'){
        // Convertendo de Fahrenheit para Celsius
        return ($temperatura - 32) * 5/9;
    }
    else {
        return 'Tipo de conversão inválido';
    }

}

echo converteTemperatura(27, 'celsiusParaFahrenheit');