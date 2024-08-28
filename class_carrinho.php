<?php

# Diz ao PHP que iremos manipular sessões nesta página.
session_start();

class Carrinho {
    public function __construct() {

        # Se a sessão não existir.
        if (!isset($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = [];  // Cria a sessão com um array vazio.
        }
        
    }

    public function adicionar($item) {
        $_SESSION['carrinho'][] = $item;
    }

    public function remover($indice){
        
    }

    public function listar(){
        return $_SESSION['carrinho'];
    }
}