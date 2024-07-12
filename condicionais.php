<?php
 
 # IF forma basica

 $numero = 35; 
 $letra = "a";

 if($numero==35 && $letra=="a"){  // && AND, || OR
    echo "faça alguma coisa $numero";
 }
 echo "<br>-------------------------<br>";
 #IF com ELSE
 if($numero > 30){
    echo "é maior que 30";
 }else{
    echo "é maior que 30";
 }

 echo "<br>-------------------------<br>";
 if($numero < 30){
    echo "é maior que 30";
 }elseif($numero==30){
    echo "é maior que 30";
 }else{
    echo "é maior que 30";
 }
 echo "<br>-------------------------<br>";

#if com operador ternario
$saida = $numero > 30? "é maior que 30" :  "é menor que 30";
echo $saida;

echo "<br>-------------------------<br>";

#CONDICIONAIS COM SWITCH
$dia = 1;
switch($dia){
    case 1: echo "Domingo"; break;
    case 2: echo "Segunda-feira"; break;
    case 3: echo "Terça-feira"; break;
    case 4: echo "Quarta-feira"; break;
    case 5: echo "Quinta-feira"; break;
    case 6: echo "Sexta-feira"; break;
    case 7: echo "Sabado"; break;
    default: echo "Nao é um dia da semana"; break;

}
echo "<br>-------------------------<br>";

# Condicionais com switch e testa condição 
$nota = 8;
switch(true){
    case ($nota >=9):
        echo "nota A";
        break;
    case ($nota >=7):
        echo "nota B";
        break;
    case ($nota >=5):
        echo "nota C";
        break;
    case ($nota >=5):
        echo "nota D";
        break;
    default: 
    echo "nao é uma nota valida";
    break;
    
}
