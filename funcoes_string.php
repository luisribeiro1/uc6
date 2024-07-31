<?php
# strings são caracteres alfanuméricos: letras, números, simbolos e pontuações
$texto = "não faa deploy na sexta-feira. Senha deve ter @9a;";

echo "<br>Tamanho do texto: " . strlen($texto);
echo "<br>Letras maiúsculas: " . strtoupper($texto);
echo "<br>Letras minúsculas: " . strtolower($texto);
echo "<br>Tirar espaços: *" . trim($texto) ."*";
echo "<br>Substituição: " . str_replace("deploy","publicação",$texto);
echo "<br>Posição do texto: " . strpos($texto, "deploy");
echo "<br>Parte do texto: " . substr($texto,0,12 );  # Inicio do texto
echo "<br>Parte do texto: " . substr($texto,-12 );  # Final do texto

$carros = ["Gol","Uno","Fit","Fiesta","C3"];
$lista_String = implode(",",$carros);
echo "<br>Lista : $lista_String";

$lista_string = "Mamão, tomate, uva, maça, laranja, limão";
$lista_array = explode(",",$lista_string);
echo "<br>-----------------------------<br>";
var_dump($lista_array);

# 30/07/2024
# 2024-07-30

# 9.365,21
# 9365.21
