<?php

# String são caracteres alfanuméricos: letras, números, símbolos e pontuações

$texto = "Não faça deploy na sexta-feira. Senha deve ter @9a";

echo "Tamanho do texto: " . strlen($texto);
echo "<br>Letras Maiúsculas: " . strtoupper($texto);
echo "<br>Letras Minúsculas: " . strtolower($texto);
echo "<br>Tirar espaços: *" . trim($texto) . "*";
echo "<br>Substituição: " . str_replace("deploy","publicação",$texto);
echo "<br>Posição do Texto: " . strpos($texto,"deploy");
echo "<br>Parte do Texto: " . substr($texto,0,12); # Início do texto
echo "<br>Parte do Texto: " . substr($texto,-12); # Final do texto

$carros = ["Gol", "Uno", "Fit", "Fiesta", "C3"];
$lista_string = implode(",",$carros);
echo "<br>Lista: $lista_string";

$lista_string = "Mamão, tomate, uva, maça, laranja e limão";
$lista_array = explode(",",$lista_string);
echo "<br>---------------------------------------<br>";
var_dump($lista_array);

# 30/07/2024 Para nós 
# 2024-07-30 Para o banco de dados

# 9.365,21 Para nós
# 9365,21 Para o banco