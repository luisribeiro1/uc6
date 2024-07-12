<?php

# IF forma básica
$numero = 35;
$letra = "a";
if($numero==35){
    echo "Faça alguma coisa $numero";
}
    
    echo "<br>--------------------------------------------<br>";

# IF com ELSE
if($numero > 30){
    echo "É maior que 30";
}else{
    echo "É menor que 30";
}

    echo "<br>--------------------------------------------<br>";
    
# IF com multiplos IF
if($numero < 30){
    echo "É menor que 30";
}elseif($numero==30){
    echo "É igual a 30";
}else{
    echo "É maior que 30";
}
        
    echo "<br>--------------------------------------------<br>";

# IF com operador ternário                                                       ESTRUTURA: $saida = $valorasercomparado > $valor                                                                            //                    ? "texto ou ação caso o valor for comparado"
$saida = $numero > 30 ? "É maior que 30" : "É menor que 30";                //                    : "texto ou ação caso o valor não bater"
echo $saida;

    echo "<br>--------------------------------------------<br>";

# Dupla comparação
if($numero=="35" && $letra=="a"){           //  && = AND, || = OR
    echo "faça alguma coisa $numero ";
}

    echo "<br>--------------------------------------------<br>";

# condicionais com Switch
$dia = 5;
switch($dia){
    case 1: echo "Domingo-feira"; break;
    case 2: echo "Segunda-feira"; break;
    case 3: echo "Terça-feira"; break;
    case 4: echo "Quarta-feira"; break;
    case 5: echo "Quinta-feira"; break;
    case 6: echo "Sexta-feira"; break;
    case 7: echo "Sabado"; break;
    default: echo "Não é uma dia da semana"; break;
}

    echo "<br>--------------------------------------------<br>";

# condicionais com Switch e testar condição 
$nota = 8;      // ambos podem ser escritas destas 2 formas.
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
        echo "Não é uma nota Válida";
        break;
}