<?php
#String são caracteres alfanúmericos: letras, números, símbolos e pontuações.
$texto = "Não faça deploy na sexta-feira. Senha deve ter @9a. ";

echo "<br>Tamanho do texto: " . strlen($texto);
echo "<br>Letras maiúsculas: " . strtoupper($texto);
echo "<br>Letras minúsculas: " . strtolower($texto);
echo "<br>Tirar espaços: *" . trim($texto) . "*";
echo "<br>Substituição: " . str_replace("deploy", "publicação", $texto);
echo "<br>Posição do texto: " . strpos($texto, "deploy");
echo "<br>Parte do texto: " . substr($texto,0,12);  #Inicio do texto
echo "<br>Parte do texto: " . substr($texto,-12);    # Final do texto

$carros = ["Gol","Uno","Fit","Fiesta","C3"];
$lista_string = implode(",",$carros);
echo "<br>Lista : $lista_string";
;

$lista_string = "Mamão, Tomate, Uva, Maça, Laranja, Limão";
$lista_array = explode(",",$lista_string);
echo "<br>";
var_dump($lista_array);



