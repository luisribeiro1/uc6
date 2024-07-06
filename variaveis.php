<?php

// Tipagem dinâmica

$nome = "João da Silva";  // string.
$cpf = "123456789";       // string.
$idade = 42;              // integer.
$peso = 69.52;            // double.
$situacao = true;         // boolean = true / false.
$estadoCivil = null;      // NULL (nulo = 0).
//$habilidades = array("HTML","CSS","JS","PHP");
$habilidades = ["HTML","CSS","JS","PHP"];     // array *preferível*
const PI = 3.14;          // double.

// echo "A variável \$idade é do tipo ".gettype($idade)." e o seu valor é $idade";

$tipo = gettype($idade);
echo "<h2>A variável \$idade é do tipo {$tipo} e o seu valor é {$idade}</h2>";


# A variável $nome é do tipo string e o seu valor é João da Silva.

# () funções  função da linguagem e função de usuário.
# [] array  array é uma estrutura de dados.
# Dentro do echo {} é usado como interpolação
# Dentro do echo . é usado como concatenação
# Dentro do echo \ é usada como "escape" que neutraliza a execução do código seguinte
# O echo echo produz resultado para visual para o usuário em forma de HTML