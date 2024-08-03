<?php

$lista = [24,69,21,12,7];

function maiorValor($lista){
    $maior = $lista[0];
    foreach($lista as $numero){
        if($numero > $maior){
            $maior = $numero;
        }
    }
    return $maior;
}
$lista = [24,69,12,21,12,7];
echo " <br> O maior valor da lista é:" . maiorValor($lista);

function menorValor($lista){
    $menor = $lista[0];
    foreach($lista as $numero){
        if($numero < $menor){
            $menor = $numero;
        }
    }
    return $menor;
}
echo "<br> O menor valor da lista é:" . menorValor($lista);



function Valormedio($lista){
    $quantidade = null;
    $valores = null;
    foreach($lista as $item){
       $valores +=$item;
       $quantidade+=1;
    }
    $medio = $valores / $quantidade;
    return $medio;

}

echo "<br> O medio da lista é:" . Valormedio($lista);


 function numeroporextenso($numero){

 $extenso = "";

 $unidade = ['zero', 'um', 'dois', 'tres', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove'];
 $especiais = ['dez', 'onze', 'doze', 'treze', 'quartorze', 'quinze', 'dezesseis', 'dezesete', 'dezoito', 'dezenove'];
 $dezenas = ['', '', 'vinte', 'trinta', 'quarenta', 'cinquenta', 'sessenta', 'setenta'];

 if($numero < 10){
    $extenso = $unidade[$numero];

 }
 elseif($numero < 20){
    $extenso = $especiais[$numero - 10];
 }
 elseif($numero < 100){
    $dezena = (int)($numero / 10);          #Força um numero inteiro
    $resto = $numero % 10;                  # % módulo. usado para obter o resto da divisão
  //  echo "<br>" . $dezena;
   // echo "<br>" . $resto;


    $complemento = "";
    if($resto > 0){
      $complemento = " e " . $unidade[$resto];
    }
   $extenso = $dezenas[$dezena] . $complemento;
 }
 else{
    $extenso = "O número é superior a 99";
 }

 return $extenso;

 }

 echo "<br> O numero por extenso é:". numeroporextenso(169);

echo "<br>-----------------------------------<br>";

 function dataInvertida($data, $tipoDeConversao){
    $data_array = explode("/",$data);
    $dia = $data[0];
    $mes = $data[1];
    $ano = $data[2];

    if($tipoDeConversao = "dia_mes_ano"){
        return $data;


    }
    elseif($tipoDeConversao = "ano_mes_dia"){
        return $ano . "-" . $mes . "-" . $dia;
        
    }
 }

 

 echo "data invertida (dia-mes-ano):" . dataInvertida("02/08/2024","dia_mes_ano") . "<br>";
 echo "data invertida (ano-mes-dia):" . dataInvertida("2024/08/02","ano_mes_dia") . "<br>";