<?php

# Criar um array associativo vazio.
$frutas = [];

# Adicionar itens.
$frutas ["banana"] = 30;
$frutas ["laranja"] = 15;
$frutas ["uva"] = 5;
$frutas ["manga"] = 78;
$frutas ["goiaba vermelha"] = 65;
$frutas ["tomate"] = 15;
$frutas ["pera"] = 10;

# Remover item do array.
unset($frutas["uva"]);

$frutas ["uva verde"] = 18;
$frutas ["uva passa"] = 35;
$frutas ["uva seca"] = 15;
$frutas ["goiaba branca"] = 48;

# Ordenar o array pelos valores.
asort($frutas);

# Ordenar o array pelos valores em ordem inversa.
arsort($frutas);

# Ordenar o array pelas chaves.
ksort($frutas);

# Ordenar o array pelas chaves em ordem reversa.
krsort($frutas);

# Iterar sobre o array para obter a chave e o valor de cada item.
foreach($frutas as $chave => $valor){
    echo "• $chave: $valor <br>";
};

# Mostrar o conteúdo do array.
// echo "<pre>";
// var_dump($frutas);
// echo "</pre>";

