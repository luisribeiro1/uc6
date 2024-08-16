<?php

# Atividade 1 ----------------

function maiorValor($lista){

    $maior = $lista[0];
    foreach($lista as $numero){
        if($numero > $maior){
            $maior = $numero;
        }
    }
    return $maior;
}

$valores = [32, 21, 9, 44, 14, 19, 13, 59, 16];
echo "O maior valor da lista é: " . maiorValor($valores);

# Atividade 2 ----------------

function menorValor($lista){

    $menor = $lista[0];
    foreach($lista as $numero){
        if($numero < $menor){
            $menor = $numero;
        }
    }
    return $menor;
}

$valores = [32, 21, 9, 44, 14, 19, 13, 59, 16];
echo "<br>O menor valor da lista é: " . menorValor($valores);

# Atividade 3 ----------------

function valorMedio($lista){

    $soma = 0;
    $quantidade = 0;
    foreach($lista as $numero){
        $soma += $numero;
        $quantidade += 1;
    }

    return $soma / $quantidade;
}

$valores = [32, 21, 9, 44, 14, 19, 13, 59, 16];
echo "<br>O menor médio da lista é: " . number_format(valorMedio($valores),2);

# Atividade 4 ----------------

function numeroPorExtenso($numero){
    $extenso = "";

    $unidades = ['zero','um','dois','três','quatro','cinco','seis','sete','oito','nove'];
    $especiais = ['dez','onze','doze','treze','quatorze','quinze','dezesseis',
    'dezesete','dezoito','dezenove'];
    $dezenas = ['','','vinte','trinta','quarenta','cinquenta','sessenta','setenta',
    'oitenta','noventa'];

    if($numero < 10){
        $extenso = $unidades[$numero];
    }
    elseif($numero < 20){
        $extenso = $especiais[$numero - 10];
    }
    elseif($numero < 100){
        $dezena = (int)($numero / 10);   # forçar um número inteiro
        $resto = $numero % 10;          # % módulo. usado para obter o resto da divisão
        // echo "<br>" . $dezena;
        // echo "<br>" . $resto;

        $complemento = "";
        if($resto > 0){
            $complemento = " e " . $unidades[$resto];
        }
        $extenso = $dezenas[$dezena] . $complemento;
    }
    else{
        $extenso = "o número é superior a 99";
    }

    return $extenso;
}

echo "<br> O número por extenso é: " . numeroPorExtenso(156);

# Atividade 5 ----------------


# Atividade 6 ----------------

function dataInvertida($data,$tipoDeConversao){

    if($tipoDeConversao=="banco-de-dados"){

    }else{

    }
}

dataInvertida("02/08/2024","banco-de-dados");
dataInvertida("2024-08-02","usuario");









