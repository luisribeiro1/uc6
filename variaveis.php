<?php

// Tipagem dinamica

$nome = "João da Silva";  // string
$cpf = "123456789";       // string
$idade = 42;              // integer
$peso = 69.52;            // double
$situacao = true;        // boolean = true ou false
$estadoCivil = null;    // null
// $habilidades = array("HTML", "CSS", "JS", "PHP");
$habilidades = ["HTML", "CSS", "JS", "PHP"];
const PI = 3.14;

//echo "A variavel \$idade é do tipo" .gettype($idade). "e o seu valor é $idade";

$tipo = gettype($idade);
echo " <h2>A variavel \$idade é do tipo {$tipo} e o seu valor é {$idade}</h2>";



# A variavel $nome é do tipo string e o seu valor é joao da silva

# () Funçoes    funçao da linguagem e funçao de usuario
# [] array      Array é uma estrutura de dados
# dentro do echo . é usado como concatenação
# dentro do echo {} é usado como interpolação
# dentro do echo \ é usado como 'escape' que netraliza a execução do codigo seguinte
# o echo produz resultado para visual para o usuario em forma de HTML