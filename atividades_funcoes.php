<?php

// ATIVIDADE 01
function maiorValor($lista) {
  
  $maior = $lista[0];
  foreach ($lista as $item) {
    if ($item > $maior) {
      $maior = $item;
    }
  }
  return $maior;
}

$lista = [3, 5, 2];
echo "O maior valor é " . maiorValor($lista);

echo '<hr/><br>';


// ATIVIDADE 02
function menorValor($lista) {
  
  $menor = $lista[0];
  foreach ($lista as $item) {
    if ($item < $menor) {
      $menor = $item;
    }
  }
  return $menor;
}

$lista = [3, 5, 2, 6];
echo "O menor valor é " . menorValor($lista);

echo '<hr/><br>';


// ATIVIDADE 03
function valorMedio($lista){

  $soma = 0;

  foreach ($lista as $nx => $item) {
    $soma = $soma + $item; 
    $nx = $nx + 1;
  }
  
  $media = $soma / $nx;;

  return $media;
}

$lista = [10, 10, 10];
echo "O valor médio é " . valorMedio($lista);

echo '<hr/><br>';


// ATIVIDADE 04
function numeroPorExtenso($numero) {
  $extenso = "";

  $unidades = ['zero', 'um', 'dois', 'três', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove'];
  $especiais = ['dez', 'onze', 'doze', 'treze', 'quatorze', 'quinze', 'dezesseis', 'dezeste', 'dezoito', 'dezenove'];
  $dezenas = ['', '', 'vinte', 'trinta', 'quarenta', 'cinquenta', 'sessenta', 'setenta', 'oitenta', 'noventa'];

  if ($numero < 10) {
    $extenso = $unidades[$numero];
  } elseif ( $numero < 20 ) {
    $extenso = $especiais[$numero - 10];
  } elseif ($numero < 100 ) {
    $dezena = (int)($numero / 10);  # (int) força o número inteiro
    $resto = $numero % 10;
    // echo $dezena ."<br>";
    // echo $resto ."<br>";

    $complemento ="";
    if ($resto > 0) {
      $complemento = " e " . $unidades[$resto];
    }

    $extenso = $dezenas[$dezena] . $complemento;
  } else {
    $extenso = "Este número é superior a 99.";
  };

  return $extenso;
}

echo "O número por extenso é: " . numeroPorExtenso(45);

echo '<hr/><br>';


// ATIVIDADE 05
function dataInvertida($data, $tipoConversao){
  $dataInvertida = explode('/', $data);

  if ($tipoConversao == '-') {
    $novaData = "$dataInvertida[2]-$dataInvertida[1]-$dataInvertida[1]";
    $data = $novaData;
    $data = str_replace("/", "-",$data);

  } elseif ($tipoConversao == "/") {
    $novaData = "$dataInvertida[2]/$dataInvertida[1]/$dataInvertida[1]";
    $data = $novaData;
    $data = str_replace("-", "/",$data);
  }
  return $data;
}
echo "A data é: " . dataInvertida('02/08/2024', '-');
echo '<hr/><br>';


// ATIVIDADE 06
function converteTemperatura($temperatura,$tipoDeConversao) {
    
  if ($tipoDeConversao == 'celsius'){
    $temperaturaConvertida = ($temperatura - 32) / 1.8;
    echo "A temperatura em Celsius é: $temperaturaConvertida";
  } elseif ($tipoDeConversao == 'fahrenheit') {
    $temperaturaConvertida = (1.8 * $temperatura) + 32;
    echo "A temperatura em Fahrenheit é: $temperaturaConvertida";
  } else {
    echo 'Escala de temperatura não reconhecida.';
  };
  return $temperaturaConvertida;
}
converteTemperatura(32, 'fahrenheit');
echo '<hr/><br>';


// TIVIDADE 07


?>