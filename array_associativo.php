<?php

# Criar um array associativo vazio 

$frutas = [];

# Adicionar Itens 
$frutas["banana"] = 30;
$frutas["laranja"] = 15; 
$frutas["manga"] = 70; 
$frutas["tomate"] = 65; 
$frutas["goiaba vermelha"] = 13; 
$frutas["maca"] = 10; 


#remover item do array
unset($frutas["uva"]);

$frutas["uva verde"] = 90; 
$frutas["uva passa"] = 42; 
$frutas["uva seca"] = 12;
$frutas["uva branca"] = 40;

# Ordenar o array pelos valores
asort($frutas);

# Ordenar o array pelos valores em ordem inversa(r = reverse)
arsort($frutas);

# Ordenar o array pelas chaves (KEY)
ksort($frutas);

# Ordenar o array pelas chaves em ordem inversa
krsort($frutas);


# iterar sobre o Array
foreach($frutas as $chave => $valor){
    echo "•$chave: $valor <br>";
}



# Mostrar o conteudo do array
// var_dump($frutas);
// echo "<pre>";
// print_r($frutas);
// echo "<pre>";
