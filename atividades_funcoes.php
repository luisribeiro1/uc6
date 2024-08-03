<?php

$lista = [15, 37, 10, 76, 95, 31];


// function maiorValor($lista){
// foreach($lista as $item){
//     if($item > $item){
//     echo "Maior numero" . $item;
    
// };

// echo $item;
// };

// }
echo maiorValor($lista) . "<br>";
echo menorValor($lista) . "<br>";
echo valorMedio($lista) . "<br>";

    
    
 function maiorValor($lista){
    $valorMaior = $lista[0];
    
    foreach($lista as $item){
        if($item > $valorMaior){
        $valorMaior = $item;
        };
      
    };
    return $valorMaior;
    }
 
 function menorValor($lista){
    $valorMenor = $lista[0];

    foreach($lista as $item){
        if($item < $valorMenor){
        $valorMaior = $item;
        };
      
    };
    return $valorMenor;
    }
 
 
function valorMedio($lista){
   $valores = null;
   $quantidade = null;
    foreach($lista as $item){
       
        $valores +=$item;
        $quantidade+=1 ;
        
    };
    $mediano = $valores / $quantidade;
    return $mediano;
    }


function numeroPorExtenso($numero){
    $extenso = "";

    $unidades = ['zero','um','dois', 'três','quatro','cinco','seis','sete','oito','nove'];
    $especiais = ['dez', 'onze', 'doze', 'treze', 'quatorze', 'quinze', 'dezesseis', 'dezesete', 'dezoito', 'dezenove'];
    $dezenas = ['', '', 'vinte', 'trinta', 'quarenta', 'cinquenta', 'sessenta', 'setenta', 'oitenta', 'noventa'];


    if($numero < 10){
        $extenso = $unidades[$numero];
    }
    elseif($numero < 20){
        $extenso = $especiais[$numero - 10];
    }
    elseif($numero < 100){
        $dezena = (int)($numero / 10); # Forçar um numero inteiro
        $resto = $numero % 10;
        // echo $dezena . "<br>";
        // echo $resto . "<br>";

        $complemento = "";
        if($resto > 0){
            $complemento = " e " . $unidades[$resto];
        }
        $extenso = $dezenas[$dezena] . $complemento;

    }
    else{
        $extenso = "Número é superior a 99";
    }

    return $extenso;
}


echo "<br> O numero por extenso é:  " . numeroPorExtenso(190);
    



# Atividade 5
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

echo dataInvertida("05/03/2024", "usuario");
echo dataInvertida("2024-03-04", "banco-de-dados");


# Atividade 6



