<?php 
$pais = "Brasil";
$regiao = "América Latina";
$salariominimo = "1.412,00";
$populacao = "203 milhões";
$estados = 26;
$presidente = "Luis Inácio Lula da Silva";

$texto = "<p>O {$pais} é o maior país da {$regiao}. Alguns dados sobre o {$pais}:</p> 
    <ul>
        <li>Valor do salário mínimo: <b>R\$ {$salariominimo}</b></li>
        <li>População: \"aproximadamente\" <b>{$populacao}</b> de pessoas</li>
        <li>Número de estados: <b>{$estados} + o Distrito Federal</b></li>
        <li>Presidente da República: <b>{$presidente}</b></li>
    </ul> ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    
    <?php echo $texto ?>

</body>
</html>