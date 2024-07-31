<?php

// # IF forma básica 

$numero = 35;
$letra = "a";

if($numero==35 && $letra=="a"){   // && AND, || or 
    echo "faça alguma coisa $numero ";
}

echo "<br>----------------------------<br>";

# if com ELSE

IF($numero > 30){
    echo "É maior que 30";
    
}else{
    echo "É maior que 30";
    
}

echo "<br>----------------------------<br>";

# if com Multiplos IFs

IF($numero < 30){
    echo "É maior que 30";

    
}elseif ($numero==30){
    echo "É igual a 30";


}else{
    echo "É maior que 30";
}

echo "<br>----------------------------<br>";

# IF com operador termário
$saida = $numero > 30
    ? "É maior que 30" 
    : "É menor que 30";

echo $saida;  

echo "<br>----------------------------<br>";

# Condicionais com Switch
$dia = 5;
switch($dia){
    case 1: 
        echo "Domingo";
        break;
    case 2:
        echo "Segunda-feira";
        break;    
    case 3:
        echo "Terça-feira";
        break;    
    case 4:
        echo "Quarta-feira";
        break;    
    case 5:
        echo "Quinta-feira";
        break;    
    case 6:
        echo "Sexta-feira";
        break;    
    case 7:
        echo "Sabádo";
        break;  
    default:
        echo "Não é um dia da semana";
        break;

}

echo "<br>----------------------------<br>";

# Condicionais com Switch e testar condição

$nota = 8;
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
    case ($nota <=5):
        echo "Nota D";
        break;
    default:
    echo "Não é uma nota valida";
    break

}