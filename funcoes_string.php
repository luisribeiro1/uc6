<?php

# Strings são caracteres alfanuméricos: letras, números, símbolos e pontuações 
$texto = "Não faça deploy na sexta-feira. Senha deve ter @9a;";

echo "<br> Tamanho do texto:" . strlen($texto);
echo "<br> Letras maiúsculas:" . strtoupper($texto);
echo "<br> Letras minúsculas:" . strtolower($texto);
echo "<br> Tirar espaços:" . trim($texto);
echo "<br> Substituir palavras:" . str_replace("deploy", "publicações", $texto);
echo "<br> Posição do texto:" . strpos($texto, "deploy" );
echo "<br> Parte do texto:" . substr($texto, 11, 12); # Final do texto 
echo "<br> Parte do texto:" . substr($texto, -12); # Final do texto 

$carros = ["gol", "uno", "fit","fiesta", "c3"];
$lista_string = implode(",", $carros);
echo "<br> Lista:" . $lista_string ;

$lista_string = "Mamão, Tomate, Uva, Maça, Laranja, Limão";
$lista_array = explode(",", $lista_string);
echo "<br>--------------<br>";
var_dump($lista_array);
# 30/07/24
# 2024-07-30