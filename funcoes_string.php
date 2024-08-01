<?php
#strings sao carcteres alfanuméricos: letras, números, símbolos 
 $texto = "Não faça deploy na sexta-feira. Senha deve ter @9a; ";

 echo "<br>Tamanho do texto: " . strlen($texto);
 echo "<br>Letras maiúsculas; " . strtoupper($texto);
 echo "<br>Letras minúsculas; " . strtolower($texto);
 echo "<br>Substituição: " . str_replace("deploy","publicação", $texto);
 echo "<br>Posição do texto " . strpos($texto, "deploy");
 echo "<br>Parte do texto  " . substr($texto,11,12);

 $carros = ["Gol", "Uno", "Fiesta","C3"];
 $lista_string = implode(",",$carros);
 echo "<br>Lista :  $lista_string";

 $lista_string = "mamão, tomate , uva , maça, laranja, limao";
 $lista_array = explode(",",$lista_string);
 echo "<br>----------------------------<br>";
 var_dump($lista_array);

 # 30/07/2024
 # 2024-07-30

 # 9.365,21
 # 9365.21
 
