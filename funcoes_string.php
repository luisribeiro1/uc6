<?php
# Strings são caracctere alfanuméricos: letras, números, símbolos e pontuações
$texto = "Não faça deploy na sexta-feira. Senha deve ter @9a; ";


echo "<br> Tamanho do Texto: ". strlen($texto);
echo "<br> Letras maiúsculas: " . strtoupper($texto);
echo "<br> Letras minúsculas: " . strtolower($texto);
echo "<br> Tirar Espaços: *" . trim($texto). "*";
echo "<br> Substituição: " . str_replace("deploy","publicação", $texto);
echo "<br> Posição do texto: " . strpos($texto, "não");
echo "<br> Parte do texto : " . substr($texto, 0,12); # Início do texto
echo "<br> Parte do texto : " . substr($texto,-12); # Final do texto


$carros = ["GOl","Uno", "jetta","Fiesta", "C3"];
$lista_string = implode(",", $carros); 
echo "<br> Lista: $lista_string";

$lista_string = "Mamão,Tomate,Uva,Maçã,Laranja,Limão";
$lista_array = explode(",",$lista_string);
echo "<br>====================<br>";
var_dump($lista_array);

# 30 /07/2024
# 2024-07-30

# 9.365,21
# 9365.21