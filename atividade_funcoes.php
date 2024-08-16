<?php

// ATIVIDADE 1
 $lista = array(56,41,21,89,10);

function maiorValor($lista){
    
    $resultado = $lista[0];

   foreach($lista as $valor){
    if($valor > $resultado){
        $resultado = $valor;
    }
    }
    return $resultado;
}

echo "-----------ATIVIDADE--1----------- <br>";
echo "O número Maior é: " . maiorValor($lista) . "<br>";

    # ATIVIDADE 2

function menorValor($lista){
    
    $resultado = $lista[0];

   foreach($lista as $valor){
    if($valor < $resultado){
        $resultado = $valor;
    }
    }
    return $resultado;
}

echo "-----------ATIVIDADE--2----------- <br>";
echo "O número Menor é: " . menorValor($lista) . "<br>";

    # ATIVIDADE 3

function medioValor($lista){
        
    $resultado = $lista[0];

    $soma = 0;
    $contar = 0;

    foreach($lista as $valor){
         $soma = $soma + $valor;
         $contar+=1;
     }

     $resultado = $soma / $contar;

     return $resultado;

}

echo "-----------ATIVIDADE--3----------- <br>";
echo "O número Médio é: " . medioValor($lista) . "<br>";

    # ATIVIDADE 4 

function numeroPorExtenso($numero){
    $extenso = "";

    $unidades = ['zero','um','dois','três','quatro','cinco','seis','sete','oito','nove'];
    $especiais = ['dez','onze','doze','treze','quatorze','quinze','dezesseis','dezesete','dezoito','dezenove'];
    $dezenas = ['','','vinte','trinta','quarenta','cinquenta','sessenta','setenta','oitenta','noventa'];

    if($numero < 10){
        $extenso = $unidades[$numero];
    }elseif($numero < 20){
        $extenso = $especiais[$numero - 10];
    }elseif($numero < 100){
        $dezena = (int)($numero / 10); #forçar um numero inteiro
        $resto = $numero % 10;
        
        $complemento = "";
        if($resto > 0){
            $complemento = " e " . $unidades[$resto];
        }
        $extenso = $dezenas[$dezena] . $complemento;

    }else{
        $extenso = "superior a noventa e nove(99).";
    }
        
    return $extenso;
}
echo "-----------ATIVIDADE--4----------- <br>";
echo "O numéro por extenso é: " . numeroPorExtenso(100) . "<br>";

    # ATIVIDADE 5

    function dataInvertida($data,$tipoDeConversao){
        $entrada = null;

        $dataConvertida = null;
        
        
        if($tipoDeConversao == "/"){
            $entrada = explode("-",$data);
            $dia = $entrada[2];
            $mes = $entrada[1];
            $ano = $entrada[0];
            
            $dataConvertida = $dia."/".$mes."/".$ano;
            
        }elseif($tipoDeConversao == "-"){
            $entrada = explode("/",$data);    
            $dia = $entrada[0];
            $mes = $entrada[1];
            $ano = $entrada[2];
            
            $dataConvertida = $ano."-".$mes."-".$dia;
        }
        return $dataConvertida;

    }

    echo "-----------ATIVIDADE--5----------- <br>";
    echo "A data convertida é: " . dataInvertida("2007-03-22","/") . "<br>";
    
    # ATIVIDADE 6 

    function converteTemperatura($temperatura,$tipoDeConversao){
        
        if($tipoDeConversao == "F"){

            $calculo = ($temperatura-32)/1.8;
            
            $resultado = $calculo."°C";

        }elseif($tipoDeConversao == "C"){

            $calculo = $temperatura*1.8+32;

            $resultado = $calculo."°F";
        }else{
            $resultado = "Erro ao converter (ex: colocando: 150C converte-> 302F )";
        }

        return $resultado;
    }
    
    echo "-----------ATIVIDADE--6----------- <br>";
    echo "A conversão é: " . converteTemperatura(33.8,"F") . "<br>";
