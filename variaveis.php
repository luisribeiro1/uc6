<?php

# () Funções => Há dois tipos de funções: Função da Linguagem e Função de Usuário
# [] Array => Array é uma estrutura de dados

// tipagem dinâmica
$nome = "João da Silva";                              // string
$idade = 42;                                          // integer
$peso = 75.56;                                       // double
$situacao = true;                                    // boolean - true or false
$estadoCivil = null;                                // null - sem valor atribuído, inexistente
// $habilidade = array("HTML", "CSS", "JS", "PHP"); // array
$habilidade = ["HTML", "CSS", "JS", "PHP"];         // array
const PI = 3.14;                                    // variável constante, neste caso double
# Usa-se pouco o termo "const", apenas em casos específicos

// echo gettype($nome);
// echo gettype($idade);
// echo gettype($peso);
// echo gettype($situacao);
// echo gettype($estadoCivil);
// echo gettype($habilidade);
echo gettype(PI);
echo "<br>";

// concatenação
echo "A variável \$nome é do tipo ".gettype($nome)." e o seu valor é {$nome}.";
// a barra invertida ignora a instrução a seguir

$tipo = gettype($nome);
echo "<h3>A variável \$nome é do tipo {$tipo} e o seu valor é {$nome}.</h3>";
