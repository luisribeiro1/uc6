<?php 
$pais = "Brasil";
$regiao = "América Latina";
$salariominimo = "1.412,00";
$populacao = "203 milhões";
$estados = 26;
$presidente = "Luis Inácio Lula da Silva";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <?php echo "<h2>O $pais é o maior páis da $regiao. Alguns dados sobre o $pais</h2>"; ?>

    <ul>
        <li><?php echo "Valor do salário mínimo: <strong>$salariominimo</strong>";?></li>
        <li><?php echo "População: <strong>$populacao</strong> de pessoas";?></li>
        <li><?php echo "Numero de estados: <strong>$estados + o DF</strong>";?></li>
        <li><?php echo "Presidente da República: <strong>$presidente</strong>";?></li>
    </ul>
</body>

</html>