<?php 

// Tipagem dinâmica

$nome = "Leticia Maria";                            // string.
$idade = 19;                                        // integer.
$peso = 52.39;                                      // double.
$situacao = true;                                   // boolean = true ou false.
$estadoCivil = null;                                // null.
//$habilidades = array("HTML", "CSS", "JS", "PHP"); // Existe duas formas de escrever: esse e a de baixo = Array.
$habilidades = ["HTML", "CSS", "JS", "PHP"];        // array.
const PI = 3.14;                                    // double.

 
echo "<center><h1>Mexendo com PHP </h1></center>";

echo "<center><h3>Método 1</h3></center>";

// Método 1
echo "<center> A variável \$nome é do tipo ".gettype($nome)." e o seu valor é $nome.</center>";
//echo " A variável \$idade é do tipo ".gettype($idade)." e o seu valor é $idade. <br>";
//echo " A variável \$peso é do tipo ".gettype($peso)." e o seu valor é $peso. <br>";

echo "<center><h3>Método 2</h3></center>";
// Método 2
$tipo = gettype($idade);
 echo "<center> A variável \$idade é do tipo {$tipo} e o seu valor é {$idade}.</center>";

# A variável $nome é do tipo string e o seu valor é Leticia Maria.

# () funções | função da linguagem e função de usuário.
# [] Array   | Array é uma estrutura de dados.
# Dentro do echo {} é usado como interpolação.
# Dentro do echo . é usado como concatenação.
# Dentro do echo \ é usado como "escape" que neutraliza a execução do código seguinte.
# O echo produz resultado visual para o usuário em forma de HTML.