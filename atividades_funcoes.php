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
        $soma + =  $numero ;
        
                
    }
    $valorMedio = $soma / $quantidade;
    return $valorMedio;

}

echo "<br> o menor valor da lista é : " . min($valores);
echo "<br> o maior valor da lista é : " . max($valores);
echo "<br> valor médio da lista é : " . valorMedio($valores);


# Atividade 4

function numeroPorExtenso($numero){
    $extenso = "";

    $unidade = ['zero','um','dois','tres','quatro','cinco','seis','sete','oito','nove'];
    $especiais = ['dez','onze','doze','treze','quatorze','quinze','dezesseis','dezessete','dezoito','dezenove'];
    $dezenas = ['','','vinte','trinta','quarenta','cinquenta','sessenta','setenta','oitenta','noventa'];
    if($numero< 10){
        $extenso = $unidade[$numero];
    }
    elseif($numero < 20){
        $extenso = $especiais[$numero - 10];

    }
    elseif($numero < 100){
        $dezena = (int)($numero / 10);  # forçar um numero inteiro
        $resto = $numero  % 10;    # % modulo. usado para obter o reso da divisão
      //  echo "<br>" .$dezena;
      //  echo "<br>" .$resto;
      
      $complemento = "";
      if($resto > 0){
        $complemento = " e " . $unidade[$resto];

      }
      $extenso = $dezenas[$dezena].$complemento;

    }
    else{
        $estenso = "o numero é superior a 99";
    }


        return $extenso;
}

echo "<br> o numero por extenso é: " . numeroPorExtenso(88); 

echo "<br>------------------------<br>";



function dataInvertida($data, $tipoDeConversao){
    $data_array = explode("/", $data);
    $dia = $data_array[0];
    $mes = $data_array[1];
    $ano = $data_array[2];

    if ($tipoDeconversao = "dia_mes_ano"){
        return $data;


    }
    elseif ($tipoDeConversao = "ano_mes_dia"){
        return $ano . "-" .$mes . "-" .$dia;

    }
}

echo"Data Invertida (dia_mes_ano): " . dataInvertida("02/08/2024","dia_mes_ano") ."<br>";
echo"Data Invertida (ano_mes_dia): " . dataInvertida("2024/08/02","ano_mes_dia") ."<br>";

echo "<br>------------------------<br>";

function converterTemperatura($temperatura, $tipodeConversao){
    if ($tipoDeConversao = "celsius para Fahrenheit"){
        
        return ($temperatura *9/5) + 32;
    }
    else{
        
        return ($temperatura -32) * 5/9;


    
    }
}

$temperaturaCelsius = 32; #celsius
$temperaturaFahrenheit = converterTemperatura($temperaturaCelsius, "converte para Fahrenheit");
echo "temperatura em Fahrenheit: " .$temperaturaFahrenheit . "\n" ;

$temperaturaFahrenheit = 64; #Fahrenheit
$temperaturaCelsius = converterTemperatura($temperaturaFahrenheit, "converte para Celsius");
echo "temperatura em celsius: " .$temperaturaCelsius,  "\n" ;






