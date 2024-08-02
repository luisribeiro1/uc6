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





    