<?php

# Strings são caracteres alfanumérico: letras, números, símbolos
$texto = "Não faça deploy na Sexta-Feira. Senha deve ter @9a;";

echo "<br>Tamanho do texto: " . strlen($texto);
echo "<br>Letras maiúsculas: " . strtoupper($texto);
echo "<br>Letras minúsculas: " . strtolower($texto);
echo "<br>Tirar espaços:" . trim($texto);
echo "<br>Substituição:" . str_replace("deploy","publicação",$texto);
echo "<br>Posição do texto:" . strpos($texto,"deploy");
echo "<br>Parte do texto:" . substr($texto,11,12);        #Inicio do texto
echo "<br>Parte do texto:" . substr($texto,-12);          # Final do texto

$carros = ["Gol","Uno","Fiesta","Fit","c3"];
$lista_string = implode(",",$carros);
echo ("<br>Lista : $lista_string");

$lista_string = "Mamão, Tomate, Uva, Maça, Banana";
$lista_array = explode(",",$lista_string);
echo "<br>----------------------<br>";
var_dump($lista_array);




#  30/07/2024
#2024-07-30

