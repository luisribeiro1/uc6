<?php

#Criar array associativo vazio
$frutas = [];


#Adicionar item
$frutas["banana"] = 30;
$frutas["uva"] = 15;
$frutas["laranja"] = 90;
$frutas["manga"] = 8;
$frutas["maça"] = 48;
$frutas["goiaba vermelha"] = 40;
$frutas["pera"] = 82;
$frutas["mamão"] = 51;

#Remover item array
unset($frutas["uva"]);

$frutas["uva verde"] = 78;
$frutas["uva passa"] = 32;
$frutas["uva seca"] = 59;
$frutas["goiaba branca"] = 71;

#ordenar os array pelos valores
asort($frutas);

#ordenar pelos valores em ordem inversa
arsort($frutas);

#ordenar pelos valores pelas chaves
ksort($frutas);

#ordenar pelos valores pelas chaves
krsort($frutas);

#mostrar o conteudo do array
foreach($frutas as $chave => $valor){
    echo "• $chave: $valor <br>";
}



// echo "<pre>";
// var_dump($frutas);
// echo "</pre>";
// echo "<pre>";
// print_r($frutas);
// echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>