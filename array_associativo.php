<?php

# Criar um Array associativo vazio
$frutas = [];

# Adicionar itens
$frutas["banana"] = 30;
$frutas["laranja"] = 15;
$frutas["uva"] = 5;
$frutas["manga"] = 78;
$frutas["goiaba vermelha"] = 65;
$frutas["tomate"] = 15;
$frutas["pera"] = 10;
$frutas["pera"] = 25;

# Remover item do array
unset($frutas["uva"]);

$frutas["uva verde"] = 18;
$frutas["uva passa"] = 35;
$frutas["uva seca"] = 15;
$frutas["goiaba branca"] = 48;

# Ordenar o array  pelos valores
asort($frutas);

# Ordenar o array pelos valores em ordem inversa
arsort($frutas);

# Ordenar pelas chaves
ksort($frutas);

# Ordenar pelas chaves em ordem inversa
krsort($frutas);

# Interar sobre arreu para o obter a chave de cada item
foreach($frutas as $chave => $valor){
    echo "• $chave: $valor <br>";
}

# Mostrar conteúdo do array
// echo "<pre>";
// var_dump($frutas);
// echo "</pre>";

