<?php

// Tipagem dinâmica

$nome = "Erick Prado";    // string
$cpf = "123456789";
$idade = 23;              // integer  inteiro
$peso = 63.52;            // double
$situacao = true;         //boolean = true ou false  
$estadoCivil = null;      // null
// $habilidades = array("HTML","CSS","JS","PHP" );     //
$habilidades = ["HTML","CSS","JS","PHP"];   // array

const PI = 3.14;


//echo "# A variavel \$idade é do tipo ".gettype($idade)." e o seu valor é $idade.";

$tipo = gettype($idade);
echo "<h1> <style> h1 {color:blue;} </style> A variavel \$idade é do tipo {$tipo} e o seu valor é {$idade}</h1>.";

# A variavel $nome é do tipo string e o seu valor é Erick Prado



# () funções   função da linguagem e função de usuário
# [] array     Array é uma estrutura de dados
# dentro do echo {} é usado como interpolação 
# Dentro do echo . é usado como concatenação 
# Dentro do echo \ é usado como 'escape' que neutraliza a execução do codigo
#  o echo produz resultado para visual para o usuario em forma de HTML