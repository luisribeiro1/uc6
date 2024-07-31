<?php
# strings são caracteres alfanuméricos: Letras, Números, Simbulos e Pontuações
$texto = "Não faça deploy na sexta-feira. Senha deve ter @9a; ";

echo "<br>Tamanho do texto: ". strlen($texto);
echo "<br>Letras maiúsculas: ". strtoupper($texto);
echo "<br>Letras minúsculas: ". strtolower($texto);
echo "<br>Tirar espaços: *". trim($texto) . "*";
echo "<br>Substituição: ". str_replace("deploy","publicação",$texto);
echo "<br>Posição do texto: ". strpos($texto, "deploy");
echo "<br>Parte do texto: ". substr($texto,0,12); // Inicio de texto
echo "<br>Parte do texto: ". substr($texto,-12);  // Final de texto

$carros = ["Gol","Uno","Fit","Fiesta","C3"];
$lista_string = implode(",",$carros);
echo "<br>Lista: $lista_string";

echo "<br>-------------------------------------<br>";

$lista_string = "Mamão, Tomate, Uva, Maçã, Laranja";
$lista_array = explode(",",$lista_string);
var_dump($lista_array);


# 30/07/2024
# 2024-07-30

#9.365,21
# 9365.21
