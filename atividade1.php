<?php 
$pais = "Brasil";
$regiao = "América Latina";
$salariominimo = "1.412,00";
$populacao = "203 milhões";
$estados = 26;
$presidente = "Luis Inácio Lula da Silva";

$texto = "<h1>O $pais é o maior país da América Latina. Alguns dados sobre o $pais</h1>";
$item1 = "
<ul>
<li>
<p>Valor do sálario mínimo: <strong>$salariominimo</strong></p>
</li>
<li>
<p>População: \"aproximadamente\" <strong>$populacao</strong> de pessoas</p>
</li>
<li>
<p>Número de estados: <strong>$estados + o Distrito Federal</strong><p>
</li>
<li>
<p>Presidente da República: <strong>$presidente</strong></p>
</li>
</ul>";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <?php echo $texto ?>    
    <?php echo $item1 ?>   
</body>
</html>