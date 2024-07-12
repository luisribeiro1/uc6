<?php

# Comando FOR
$soma = 0;
for($i=1; $i<=5; $i++){
    $soma = $soma + $i;
}

echo $soma;

echo "<br>-----------------------</br>";


# Atividade
# Tabuada do 7
/*
7x1 = 7
7x2 = 14
7x3=21

*/

$inteiro = 7;
for($i=0; $i<=10; $i++){
    $tabuada = $inteiro * $i;
    echo "$inteiro x $i = $tabuada<br>";
}

