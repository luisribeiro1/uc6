<?php

// Tipagem dinâmica
$nome = "Murilo"; // String
$cpf = "123456789";  // Sring
$idade = 55;    // integer
$peso = 60.50; //double
$situacao = true; // boolean = true ou false
$estadoCivil = null; // NULL
//$habilidades = array("HTML", "CSS", "JS" ,"PHP");
$habilidades = ["HTML","CSS","JS" ,"PHP"]; //array
const PI = 3.14;

// echo "A variavel \"\$idade\" é do tipo ".gettype($idade)." e o seu valor é $idade";
$tipo = gettype($idade);
echo "<h1>A variavel \$idade é do tipo {$tipo} e o seu valor é {$idade}</h1>";

# A variavel $nome é do tipo string e o seu valor é Murilo


# () funções    função da linguagem e função de usuário
# [] array  Array é uma estrutura de dados
# Dentro do echo {} é usado como interpolção
# Dentro do echo . é usado como concatenação
# Dentro do echo \ é usado como escape que neutraliza a execução do código seguinte
# O echo produz o resultado visual para o usuário em forma de HTML 