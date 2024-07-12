<?php

# IF forma básica

$numero = 35;
$letra = "A";
if($numero==35 && $letra == "A"){ // && AND, || OR
    echo "faça alguma coisa $numero $letra";
}

echo "<br>-----------------------</br>";

# IF com ELSE
if($numero > 30) {
    echo "É maior que 30";
}else{
    echo "É menor que 30";
}

echo "<br>-----------------------</br>";

# IF com múltiplos IFs
if($numero < 30){
    echo "É menor que 30";
}else if($numero == 30) {
    echo "É igual a 30";
}else{
    echo "É maior que 30";
}

echo "<br>-----------------------</br>";

# IF com operador ternário

$saida = $numero > 30 ? "é maior que 30" : "É menor que 30";

echo $saida;

echo "<br>-----------------------</br>";

# Condicionais com Switch

$dia = 8;

switch($dia){
    case 1: echo "Domingo"; break;
    case 2: echo "Segunda-feira"; break;
    case 3: echo "Terça-feira"; break;
    case 4: echo "Quarta-feira"; break;
    case 5: echo "Quinta-feira"; break;
    case 6: 
        echo "Sexta-feira"; 
        break;
    case 7: 
        echo "Sábado"; 
        break;
    default: echo "Não é um dia da semana"; break;
}

echo "<br>-----------------------</br>";

# Condicionais com switch e testar condição

$nota = 5.2;
switch(true){
    case($nota >=9):
        echo "nota A";
        break;
    case($nota >=7):
        echo "nota B";
        break;
    case($nota >=5):
        echo "nota C";
        break;
    case($nota >=3):
        echo "nota D";
        break;
    default:
    echo "Nota E";
    break;
}