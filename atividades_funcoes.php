<?php


$lista = [3,24,74,58,46];

function maiorValor($lista){
    $maior = $lista[0];
foreach($lista as $numero){
if($numero > $maior){
    $maior = $numero;
}
}
return $maior;
}
echo "<br>O maior valor da lista é: " . maiorValor($lista);



function menorValor($lista){
    $menor = $lista[0];
foreach($lista as $numero){
if($numero < $menor){
    $menor = $numero;
}
}
return $menor;
}
echo "<br>O menor valor da lista é: " . menorValor($lista);


function valorMedio($lista){
    $valores = null;
    $quantidade = null;   
foreach($lista as $item){
$valores +=$item;
$quantidade+=1;
}
$medio = $valores / $quantidade;
return $medio;
}
echo "<br>O valor medio da lista é: " . valorMedio($lista);



function numeroPorExtenso($numero){
$extenso = "";

$unidades = ['zero','um','dois', 'tres', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove'];
$especiais = ['dez', 'onze', 'doze', 'treze', 'quatorze','quinze', 'dezesseis',
 'dezesete', 'dezoito', 'dezenove'];
$dezenas = ['','','vinte','trinta', 'quarenta', 'cinquenta', 'sessenta', 'setenta', 'oitente', 'noventa'];


if($numero < 10){
    $extenso = $especiais[$numero - 10];
}
elseif($numero < 20){
    $extenso = $especiais[$numero - 10];
}
elseif($numero < 100){
    $dezena = (int)($numero / 10); # forçar um numero inteiro
    $resto = $numero % 10;      # % modulo. usado para obter o resto da divisao
    // echo "<br>" . $dezena;
    // echo "<br>" . $resto;

    $complemento = "";
    if($resto > 0){
        $complemento = " e " . $unidades[$resto];
    }
    $extenso = $dezenas[$dezena] . $complemento;
}
else{
    $extenso = " o numeroé superior a 99";
}

return $extenso;

}

echo "<br>O numero por extenso é: " . numeroPorExtenso(155);

# atividade 5

function dataInvertida($data, $tipoDeConversao) {
    if ($tipoDeConversao == 1) { 
        $partes = explode('/', $data);

        return $partes[2] . '-' . $partes[1] . '-' . $partes[0];

    } elseif ($tipoDeConversao == 2) { 
        $partes = explode('-', $data);

        return $partes[2] . '/' . $partes[1] . '/' . $partes[0];

    } else {
        return "Tipo de conversão inválido.";
    }
}


echo "<br>" . dataInvertida('02/08/2024', 1); 
echo "<br>" . dataInvertida('2024-02-08', 2); 




# atividade 6




