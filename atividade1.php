<?php 
$pais = "Brasil";
$regiao = "América Latina";
$salariominimo = "1.412,00";
$populacao = "204 milhões";
$estados = 26;
$presidente = "Luis Inácio Lula da Silva";


$texto = "erick";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>

    <?php echo "O {$pais} é o maior país da {$regiao}. Alguns dados sobre o {$pais}:" ?>
<ul>
    <li><?php echo "Valor do salário mínimo: <strong>R$ {$salariominimo}</strong>" ;?></li>
    <li><?php echo "População: \"aproximadamente\"<strong>{$populacao}</strong> de pessoas" ;?></li>
    <li><?php echo "Numero de estados: <strong>{$estados} + o Distrito Federal </strong>" ;?></li>
    <li><?php echo "Presidente da República: <strong>{$presidente} . </strong>" ;?></li>
    
</ul>    

</body>
</html>