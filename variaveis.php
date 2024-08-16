<?php

// Toda variavel comeã com $
// php é uma linguagem de tipagem dinâmica
                                                    //  _______________________________                                                    
$nome = "Kainã Daniel da Silva Correa";             // | string    =   texto           |
$cpf = "123456789";                                 // | string    =     ^             |
$idade = 17;                                        // | integer   =   0               |
$peso = 51.01;                                      // | double    =   0.0             |
$situacao = true;                                   // | boolean   =   true ou false   |
$estadoCivil = null;                                // | null      =   nulo            |
// $habilidades = array("HTML","CSS","JS","PHP");   // | array     =   27>*            |
$habilidades = ["HTML","CSS","JS","PHP"];           // | array     =   28>*            |
const PI = 3.14;                                    // | Const     =   Constante       |
                                                    // |_______________________________|

// Mostrar o tipo e valor da variável de forma concatenada:>

    # Método Direto:>
    echo "<h3>a variável \"\$nome\" é do tipo \"".gettype($nome)."\" e seu valor é \"$nome\"</h3>";

    # Método melhor estruturado:>
    $tipo = gettype($idade);
    echo "<h3>a variável \"\$idade\" é do tipo \"$tipo\" e seu valor é \"$idade\"</h3>";

// ANOTAÇÕES:>

    # () funções   função da linguagem e função de usuário.
    # [] array     Array é uma estrutura de dados.

    # echo         é a o retorno do PHP em HTML;
        # Dentro do Echo "{}" é usado como interpolação;
        # Dentro do Echo "." é usado como concatenação;
        # Dentro do Echo "\" é usado como "ESCAPE" que é a neutralização do código seguinte.

