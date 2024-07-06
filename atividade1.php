<?php 
$pais = "Brasil";
$regiao = "América Latina";
$salariominimo = "1.412,00";
$populacao = "204 milhões";
$estados = 26;
$presidente = "Luis Inácio Lula da Silva";

$texto = "<p><big> O $pais é o maior país da $regiao. Alguns dados sobre o $pais: 
<ul> 
<li>Valor do salário mínimo: <strong> $salariominimo</strong></li>  
<li>População \"aproximadamente\" <strong> $populacao </strong> de pessoas </li>
<li>Número de estados: <strong> $estados + o Distrito Federal </strong> </li>
<li>Presidente da República: <strong> $presidente. </strong></li>
</ul>
</p>
</big>";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <?php 
    
echo "$texto"
    
    ?>

</body>
</html>