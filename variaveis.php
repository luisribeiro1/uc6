<?php

// Tipagem dinâmica

$nome = "Pedro Muniz";    // string
$cpf = "123456789";          // string
$idade = 29;                // integer
$peso = 79.62;              // double
$situacao = true;           // boolean = true ou false
$estadoCivil = null;        // null = nulo
//$habilidades = array("HTML", "CSS", "JS", "PHP");
$habilidades = ["HTML", "CSS", "JS", "PHP"]; // array
const PI = 3.14;

//echo "A variável \$peso é do tipo ".gettype($peso)." e o seu valor é $peso";

$tipo = gettype($idade);

echo "<h2>A variável \$idade é do tipo {$tipo} e o seu valor é {$idade}</h2>";

# A variável $nome é do tipo string e o seu valor é João da Silva

# () funções           função da linguagem e função de usuário
# [] array             Array é uma estrutura de dados
# Dentro do echo {} é usado como interpolação
# Dentro do echo . é usado como concatenação
# Dentro do echo \ é usado como "escape" que neutraliza a execução do código seguinte
# O echo produz resultado visual para o usuário em forma de HTML
