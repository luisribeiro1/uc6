<?php

// tipagem dinamica
$nome = "Paulo";       // string
$cpf = "123456789";    // string
$idade = 55;           // interge
$peso = 60.50;         // double
$situacao = true;      // boolean = true ou false
$estadoCivil = null;   // null
// habilidades = array("HTML","CSS","JS","PHP");
$habilidades = ["HTML","CSS","JS","PHP"]; // array
const PI = 3.14;


//echo "A variavel \$idade é o tipo ".gettype($idade)." e o seu valor é $idade";

$tipo = gettype($idade);
echo "<h1>A variavel \$idade é o tipo {$tipo} e o seu valor é $idade</h1>";

# A variavel $nome é o tipo string e o seu valor é Paulo


# () funções    função de linguagem e função de usuario
# [] array      array e uma estrutura de dados
# Dentro do echo {} é usado cmo interpolação0 
# Dentro o echo  . é usado como concatenação
# Dentro do echo \ é usado como "escap" que neutraliza a execução do códico 
# O echo produz resultado para visual para o usuario em forma de HTML  