<?php 
$pais = "Brasil";
$regiao = "América Latina";
$salariominimo = "1.412,00";
$populacao = "203 milhões";
$estados = 26;
$presidente = "Luis Inácio Lula da Silva";
$text = "O Brasil é o maior pais da América Latina. Alguns dados sobre o Brasil:";

echo "<h3>A variável \$text é do tipo" .gettype($text). ",o seu valor é {$text}</h3>"; 

echo "<h3>A variável \$pais é do tipo" .gettype($pais). ", o seu valor é {$pais}</h3>"; 
echo "<h3>A variável \$regiao é do tipo" .gettype($regiao). ", o seu valor é {$regiao}</h3>"; 
echo "<h3>A variável \$salariominimo é do tipo" .gettype($salariominimo). ", o seu valor é {$salariominimo}</h3>"; 
echo "<h3>A variável \$população é do tipo" .gettype($população). ", o seu valor é {$população}</h3>"; 
echo "<h3>A variável \$estados é do tipo" .gettype($estados). ",o seu valor é {$estados}</h3>"; 
echo "<h3>A variável \$presidente é do tipo" .gettype($presidente). ",o seu valor é {$presidente}</h3>"; 
 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>

<?php echo $text?>


<li>.</li>



    

</body>
</html>