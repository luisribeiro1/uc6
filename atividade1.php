<?php 
$pais = "Brasil";
$regiao = "América Latina";
$salariominimo = "1.412,00";
$populacao = "204 milhões";
$estados = 26;
$presidente = "Luis Inácio Lula da Silva";


$texto = "<h1> O $pais é o maior país da América Latina. Alguns dados sobre o Brasil</h1>";
$texto2 = "<p>Valor do salario minimo: <strong>R$$salariominimo</strong></p>";
$texto3 = "<p>População:\"aproximadamente\" <strong>$populacao</strong>de pessoas</p>";
$texto4 = "<p>Numero de estados: <strong>R$$estdos + o Distrito Federal</strong></p>";
$texto5 = "<p>Presidente da Republica: <strong>$presidente.</strong></p>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <?php echo  $texto ?>
    <ul>
        <li><?php echo $texto2 ?></li>
        <li><?php echo $texto3 ?></li>
        <li><?php echo $texto4 ?></li>
        <li><?php echo $texto5 ?></li>
    </ul>
    

</body>
</html>