<?php
// Strings são caracteres alfa numéricos: letras, números, simbolos
$texto = "Não faça deploy na sexta feira! #Fica a dica !1. *";

echo $texto;
echo "<br>Tamanho do texto é: " . strlen($texto);
echo "<br>Letras maiúsculas: " . strtoupper($texto);
echo "<br>Letras minúsculas: " . strtolower($texto);
echo "<br>Tirar espaços: *" . trim($texto) . "*";
echo "<br>Substituição: " . str_replace("deploy", "publicação",$texto);
echo "<br>Posição do texto: " . strpos($texto, "deploy");
echo "<br>Parte do texto: " . substr($texto,0,10); // inicio do tetxo
echo "<br>Parte do texto: " . substr($texto,-10); // final do tetxo
echo "<br>Letras minúsculas: " . strtolower($texto);

$carros = ["Gol", "Uno", "Fit", "Fiesta", "C3"];

$lista_string = implode(", ",$carros);
echo "<br>LISTA: $lista_string";

$lista_string = "Melão, Tomate, Uva, Maçã, Laranja, Limão";
$lista_array = explode(", ", $lista_string);
echo "<br>---------------------<br>";
var_dump($lista_array)

?>