<?php

# IF forma básica 

$numero = 20;
$letra = "a";

if($numero==20){
    echo "Faça alguma coisa $numero";
}

echo"<br>--------------------------<br>";

# IF com ELSE 

if($numero > 30){
    echo "É maior que 30";
}
else{
    echo "É menor que 30";
}

echo"<br>--------------------------<br>";

#IF com multiplos IFs

if($numero < 30){
    echo "É menor que 30";
}
elseif ($numero==30){
    echo "É igual a 30";
}
else{
    echo "É maior que 30";
}

echo"<br>--------------------------<br>";

#IF com operador ternário
$saida = $numero > 30 ? "É maior que 30" : "É menor que 30";
echo $saida;

echo"<br>--------------------------<br>";

if($numero==20 && $letra=="a"){   // && AND, || OR
    echo "Faça alguma coisa $numero";
}

echo"<br>--------------------------<br>";

#Condicionais com Switch

$dia = 1;
switch($dia){
    case 1: 
        echo "Domingo";
        break;
    case 2:
        echo "Segunda-Feira";
        break;
    case 3:
        echo "Terça-Feira";
        break;
    case 4:
        echo "Quarta-Feira";
        break;
    case 5:
        echo "Quinta-Feira";
        break;
    case 6:
        echo "Sexta-Feira";
        break;
    case 7:
        echo "Sábado";
        break;
    default:
        echo "Não é um dia da semana!!";
        break;
    }

echo"<br>--------------------------<br>";

# Condicionais com switch e testar condição

$nota = 12;
switch(true){
     case ($nota >=9):
        echo"Nota A";
        break;
     case ($nota >=7):
        echo"Nota B";
        break;
     case ($nota >=5):
        echo"Nota C";
        break;
     case ($nota <5):
        echo"Nota D";
        break;
     default:
        echo"Não é uma nota válida";
        break;
}










