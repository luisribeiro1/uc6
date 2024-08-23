<?php

# criar um array associativo vazio
$frutas =[];

# adicionar items 
$frutas["banana"] = 30; 
$frutas["laranja"] = 15; 
$frutas["uva"] = 5; 
$frutas["manga"] = 78; 
$frutas["goiaba vermelha"] = 65; 
$frutas["tomate"] = 15; 
$frutas["pera"] = 10; 


# remover item do array
unset($frutas["uva"]);

$frutas["uva verde"] = 18; 
$frutas["uva passa"] = 35; 
$frutas["uva seca"] = 15; 
$frutas["goiaba branca"] = 48; 


# ordenar o array pelos valores 
asort($frutas);

# ordenar o array pelos valores em ordem inversa
arsort($frutas);

# ordenar o array pela chaves
ksort($frutas);

# ordenar o array pela chaves em ordem inversa
krsort($frutas);

foreach($frutas as $chave => $valor){
    echo "•  $chave: $valor<br>";

}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


