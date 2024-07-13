<?php 

# IF forma Basica 

$numero = 35; 
$letra = "a";

if($numero==35 && $letra=="a") {      // && AND, || OR
      echo "faça alguma coisa $numero";
}


echo "<br> ---------------------------<br>";
# If com ELSE

if($numero > 30){
    echo "$numero é maior que 30";

}else{
    echo "30 é menor que $numero";
}

echo "<br> ---------------------------<br>";

#IF com multiplos IFs
if($numero < 30){
    echo "é menor que 30";

}elseif ($numero == 30){
    echo "é igual a 30";
}else{
    echo "é maior que 30";
}


echo "<br> ---------------------------<br>";

#IF com operador ternário


$saida = $numero > 30 ? "$numero é maior que 30" : "30 é menor que $numero";
    echo $saida;


echo "<br> ---------------------------<br>";

$saida = $numero > 30   
    ? "$numero é maior que 30" 
    : "30 é menor que $numero";
echo $saida;

echo "<br> ---------------------------<br>";

# Condicionais com Switch 
$dia = 4;
switch($dia){
    case 1 : echo "Domingo" ; break;
    case 2 : echo "Segunda-Feira" ; break;
    case 3 : echo "Terça-Feira"; break;
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
        echo "Sabado";
        break;
    default:
        echo "Não é um dia da semana";
        break;
}

echo "<br> ---------------------------<br>";

# Condicionais com Switch 

$nota = 9; 
switch(true) {
    case ($nota >= 9 ):
        echo "Nota A";
        break;
    case ($nota >= 7 ):
        echo "Nota B";
        break;
    case ($nota >= 5 ):
        echo "Nota C";
        break;
    case ($nota < 5 ):
        echo "Nota D";
        break;
    case($nota < 3):
        echo "Reprovado";
        break;
    default: 
        echo "Não é uma nota válida";
        break;
}