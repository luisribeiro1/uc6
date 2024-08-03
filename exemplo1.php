<?php 
$pais = "Brasil";
$regiao = "América Latina";
$salariominimo = "1.412,00";
$populacao = "203 milhões";
$estados = 26;
$presidente = "Luis Inácio Lula da Silva";

$texto = "<h2>O {$pais} é o maior país da {$regiao}. Alguns dados sobre o {$pais}:</h2>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <?php echo $texto;
    echo "<ul>
        <li>Valor do salário mínimo: <strong>{$salariominimo}</strong></li>
        <li>População: \"aproximadament\" <strong>{$populacao}</strong> de pessoas</li>
        <li>Número de estados: <strong>{$estados} + o Distrito Federal</strong></li>
        <li>O nosso presidente da república é o senhor <strong>{$presidente}.</strong></li>
    </ul>"
    
    ?>
</body>
</html>