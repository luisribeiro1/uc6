<?php

# Strings são caracteres alfanuméricos: letras, números, símbolos e pontuações
$texto = "Não faça deploy na sexta-feira. Senha deve ter @9a.:;";

echo "Tamanho do texto: " . strlen($texto) . "<br>";
echo "Letras maiúsculas: " . strtoupper($texto) . "<br>";
echo "Letras minúsculas: " . strtolower($texto) . "<br>";
echo "Tirar espaços: *" . trim($texto) . "*<br>";
echo "Substituição: " . str_replace("deploy","publicação",$texto) . "<br>";
echo "Posição do texto: " . strpos($texto, "deploy") . "<br>";
echo "Parte do texto: " . substr($texto, 0,12) . "<br>"; # Início do texto
echo "Parte do texto: " . substr($texto,-12) . "<br>"; # Final do texto

$carros = ["Gol", "Uno", "Fit", "Fiesta","C3"];
$lista_string = implode(",", $carros);
echo "<br>Lista: $lista_string";

$lista_string = "Mamão, Tomate, Uva, Maçã, Laranja, Limão";
$lista_array = explode(",",$lista_string);
echo "<br>-----------------------<br>";
var_dump($lista_array);