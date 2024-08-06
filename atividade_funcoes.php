<?php

// $lista = [52,39,78,21,84,72];
$numeros = [52,39,78,21,84,72];

# Atividade 1.
function maiorValor($lista) {

    $maior = $lista[0];
    foreach($lista as $valor) {
        if($valor > $maior) {
            $maior = $valor;
        }
    }
    return $maior;
}

# Atividade 2.
function menorValor($lista) {

    $menor = $lista[0];
    foreach($lista as $valor) {
        if($valor < $menor) {
            $menor = $valor;
        }
    }
    return $menor;
}

# Atividade 3.
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

# Atividade 4.
function numeroPorExtenso($numero) {
    $extenso = "";
    $unidades = ['Zero','Um','Dois','Três','Quatro','Cinco','Seis','Sete','Oito','Nove'];
    $decimais = ['Dez','Onze','Doze','Treze','Quatorze','Quinze','Dezesseis','Dezesete','Dezoito','Dezenove'];
    $dezenas = ['','','Vinte','Trinta','Quarenta','Cinquenta','Sessenta','Setenta','Oitenta','Noventa'];
    if($numero < 10) {
        $extenso = $unidades[$numero];
    }elseif($numero < 20) {
        $extenso = $decimais[$numero - 10];
    }elseif($numero < 100) {
        $dezena = (int)($numero / 10);
        $resto = $numero % 10;
        $complemento = "";
        if($resto > 0) {
            $complemento = " e " . $unidades[$resto];
        }
        $extenso = $dezenas[$dezena] . $complemento;
    }
    else {
        $extenso = "O número é superior a 99.";
    }
    return $extenso;
}

# Atividade 6
function dataInvertida($data, $tipoDeConversao){

    $converter = "";
    $dia = "";
    $mes = "";
    $mes = "";
    
    if($tipoDeConversao =="banco-de-dados"){
        $data = explode("-",$data);
        $dia = $data[2];
        $mes = $data[1];
        $ano = $data[0];
        $converter = "<br>". $dia . "/" . $mes . "/" . $ano . "";   
    }
    else{
        $data = explode("/", $data);
        $converter = "<br>" . $data[2] . "-" . $data[1] . "-". $data[0];
    }
    return $converter;
}

# Atividade 7
function converteTemperatura($temperatura, $tipoDeConversao) {
    if ($tipoDeConversao == 'c-to-f') {
        // Converte de Celsius para Fahrenheit
        $fahrenheit = ($temperatura * 9/5) + 32;
        return $fahrenheit;
    } elseif ($tipoDeConversao == 'f-to-c') {
        // Converte de Fahrenheit para Celsius
        $celsius = ($temperatura - 32) * 5/9;
        return $celsius;
    } else {
        return "Tipo de conversão inválido!";
    }
}

echo "Lista: 52,39,78,21,84,72.";

echo "<br>-----------------------------------<br>";

echo "O maior número é: " . maiorValor($numeros);

echo "<br>-----------------------------------<br>";

echo "O menor número é: " . menorValor($numeros);

echo "<br>-----------------------------------<br>";

echo "O valor médio é: " . valorMedio($numeros);

echo "<br>-----------------------------------<br>";

echo "O número por extenso é: " . numeroPorExtenso(77);

echo "<br>-----------------------------------";

echo dataInvertida("05/03/2024", "usuario");

echo "<br>";

echo dataInvertida("2024-03-04", "banco-de-dados");

echo "<br>-----------------------------------<br>";

echo converteTemperatura(22, 'c-to-f') . " Fahrenheit"; 

echo "<br>";

echo converteTemperatura(82, 'f-to-c') . " Celsius";


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



// function dataInvertida($data, $tipoDeConversao) {
//     if ($tipoDeConversao == 'pt-br-to-en') {
//         $partes = explode('/', $data);
//         if (count($partes) == 3) {
//             return $partes[2] . '-' . $partes[1] . '-' . $partes[0];
//         }else {
//             return "Formato de data inválido";
//         }elseif ($tipoDeConversao == 'en-to-pt-br'){
//             $partes = explode('-', $data);
//             if (count($partes) == 3) {
//                 return $partes[2] . '/' . $partes[1] . '/' . $partes[0];
//             }else {
//                 return "Formato da data Invalido";
//             }else {
//                 return "Conversão de data inválido"
//             }
//         }
//     }
// }