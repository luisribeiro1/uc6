<?php

// Tipagem dinâmica

$nome = "João da Silva";    // string
//$cpf = "123456789";         // string
$idade = 42;                // integer
$peso = 69.52;              // double
$situacao = true;           // boolean = true ou false
$estadoCivil = null;        // null
//$habilidades = array("HTML","CSS","JS","PHP");
$habilidades = ["HTML","CSS","JS","PHP"];   // array
const PI = 3.14;

//echo "A variável \$idade é do tipo ".gettype($idade)." e o seu valor é {$idade}";

$tipo = gettype($idade);
echo "<h3>A variável \$idade é do tipo {$tipo} e o seu valor é {$idade}</h3>";

# () funções    função da linguagem e função de usuário
# [] array      Array é uma estrutura de dados
# Dentro do echo {} é usado como interpolação
# Dentro do echo . é usado como concatenação
# Dentro do echo \ é usado como 'escape' que neutraliza a execução do código seguinte
# O echo produz resultado para visual para o usuário em forma de HTML
