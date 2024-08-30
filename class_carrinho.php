<?php

# Diz ao PHP que iremos manipular sessões nesta página.
session_start();

class Carrinho {
    public function __construct() {

        # Se a sessão não existir.
        if (!isset($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = [];  // Cria a sessão com um array vazio.
        }elseif (!isset($_SESSION['desconto'])) {
            $_SESSION['desconto'] = 0;
        }    
    }

    public function adicionar($item) {
        $_SESSION['carrinho'][] = $item;
    }

    public function remover($indice){
        unset($_SESSION['carrinho'][$indice]);
    }

    public function listar() {
        return $_SESSION['carrinho'];
    }


    public function aplicarDesconto($percentual) {
        $_SESSION['desconto'] = $percentual;
    }

    public function pegarDesconto() {
        return $_SESSION['desconto'];
    }

}