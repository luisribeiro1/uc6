<?php

# IF forma básica

$numero = 35;
$letra = "A";

if($numero==35 && $letra=="a"){     # && and, || or.
    echo "O número é $numero";
}

if($numero==35){
    echo "O número é $numero";
}

echo "<br>------------------------</br>";
# IF com ELSE

if($numero > 30){
    echo "É maior que 30";
}else{
    echo "É menor que 30";
}

echo "<br>------------------------</br>";

# IF com vários IFs

if($numero < 30){
    echo "É menor que 30";
}else if($numero==30){
    echo "É igual a 30";
}else{
    echo "É maior que 30";
}

echo "<br>------------------------</br>";

# IF com operador ternário

$saida = $numero > 30
    ? "É maior que 30"
    : "É menor que 30";

echo $saida;

echo "<br>------------------------</br>";

# Condicionais com Switch

$dia = 5;

switch($dia){
    case 1: echo "Domingo"; break;
    case 2: echo "Segunda"; break;
    case 3: echo "Terça"; break;
    case 4: echo "Quarta"; break;
    case 5:
        echo "Quinta";
        break;
    case 6:
        echo "Sexta";
        break;
    case 7:
        echo "Sábado";
        break;
    default:
        echo "Não é um dia da semana";
        break;
}

echo "<br>------------------------</br>";

# Condicionais com switch e testar condição

$nota = 4;

switch(true){
    case ($nota >=9):
        echo "Nota A";
        break;
    case ($nota >=7):
        echo "Nota B";
        break;
    case ($nota >=5):
        echo "Nota C";
        break;
    case ($nota <5):
        echo "Nota D";
        break;
    default:
        echo "Nota Inválida";
        break;
}