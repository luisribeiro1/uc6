<?php

# Criar um array associativo vazio
$frutas = [];

# Adicionar itens
$frutas["banana"] = 30;
$frutas["laranja"] = 15;
$frutas["uva"] = 90;
$frutas["manga"] = 18;
$frutas["goiaba vermelha"] = 46;
$frutas["tomate"] = 71;
$frutas["pera"] = 33;
$frutas["lichia"] = 99;
$frutas["maçã"] = 57;

# Remover item do array
unset($frutas["uva"]);

$frutas["uva verde"] = 18;
$frutas["uva passa"] = 35;
$frutas["uva seca"] = 15;
$frutas["goiaba branca"] = 48;

# Ordenar o array pelos valores
asort($frutas);

# Ordenar o array pelos valores em ordem inversa
arsort($frutas);

# Ordenar o array pelas chaves
ksort($frutas);

# Ordenar o array pelas chaves em ordem inversa
krsort($frutas);

# Iterar sobre o array para obter a chave e valor de cada item
foreach($frutas as $chave => $valor){
    echo "•$chave: $valor <br>";
}


// # Mostrar o conteúdo do array
// echo "<pre>";
// var_dump($frutas);
// echo "</pre>";
