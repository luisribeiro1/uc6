<?php

#Maior valor - Atividade 1

$lista = [56,41,21,89,10];


function maiorValor($lista) {

    $maior = $lista[0];
 
    foreach($lista as $resultado){
    
        if($resultado > $maior){
            $maior = $resultado;
        }
    }
    
    return $maior;
}

echo "O maior número é " . maiorValor($lista);

echo "<br>";

#Menor valor - Atividade 2

$lista2 = array(99,2,9,90,12);


function menorValor($lista2) {

    $menor = $lista2[0];
 
    foreach($lista2 as $resultado2){
    
        if($resultado2 < $menor){
            $menor = $resultado2;
        }
    }
    return $menor;

}

echo "O menor número é  " . menorValor($lista2);

echo "<br>";

#Valor médio - Atividade 3

$lista3 = array(70,23,1,509,100);


function medioValor($lista3) {

    $soma = 0;
    $contar = 0;
    $medio = $lista3[0];
    
    foreach($lista3 as $resultado3){
    
            $soma = $soma + $resultado3;
            $contar +=1;
    }
    $calculo = $soma / $contar;

    return $calculo;

}

echo "O valor médio é  " . medioValor($lista3);

#Número por extenso - Atividade 4
 
function numeroPorExtenso($numero){
    $extenso = "";
    
    $unidades = ['zero','um','dois','três','quatro','cinco','seis','sete','oito','nove'];
    $especiais = ['dez','onze','doze','treze','quatorze','quinze','dezesseis','dezesete','dezoito','dezenove'];
    $dezenas = ['','','vinte','trinta','quarenta','cinquenta','sessenta','setenta','oitenta','noventa'];
    
    if($numero < 10){
        $extenso = $unidades[$numero];
    }
    else if($numero < 20){
        $extenso = $especiais[$numero - 10];
    }
    else if($numero < 100){
        $dezena = (int)($numero / 10); #forçar um número inteiro
        $resto = $numero % 10;         # % módulo. Usado para obter o resto da divisão
        //echo "<br>" . $dezena; 
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

echo "<br> O número por extenso é: " . numeroPorExtenso(101);

#Data Invertida - Atividade 5

echo "<br>";


function dataInvertida($data,$tipoDeConversao){
     
    $entrada = null;

    $conversao = null;
 
 if($tipoDeConversao == "/"){

    $entrada = explode("-",$data);
    $dia = $entrada[2];
    $mes = $entrada[1];
    $ano = $entrada[0];
    $conversao = $dia."/".$mes."/".$ano;
 }
 elseif($tipoDeConversao == "-"){
      
    $entrada = explode("/", $data);
    $dia = $entrada[0];
    $mes = $entrada[1];
    $ano = $entrada[2];

    $conversao = $ano. "-" .$mes. "-" .$dia;
 }

 return $conversao;

}

echo "<br> Converter a data: " . dataInvertida("12/04/2023", "-");

//#Converte Temperatura 
echo "<br>";

function converteTemperatura($temperatura,$tipoDeConversao){
     
    if($tipoDeConversao == "°F"){
        
        $C = ($temperatura -32 )/1.8;

        $resultado = $C ."°C";
     }elseif($tipoDeConversao == "°C"){
        
        $C = $temperatura *1.8+32;

        $resultado = $C ."°F";

     }

     return $resultado;

}

echo "<br> Converter a temperadura: " . converteTemperatura(302, "°F");


