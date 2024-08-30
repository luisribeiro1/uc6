<?php

# Diz ao PHP que iremos manipular sessões nesta página
session_start();

class Carrinho {

    # Método construtor
    public function __construct() {

        # Se a sessão não existir
        if (!isset($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = [];     // Cria a sessão com um array vazio
        }    
    }

    public function adicionar($item) {  // Recebe o array como parâmetro
        $_SESSION['carrinho'][] = $item;
    }

    public function remover($indice) {
        unset($_SESSION['carrinho'][$indice]);
    }

    public function listar() {
        return $_SESSION['carrinho'];
    }

    public function desconto(){
        return $_SESSION['desconto'];
    }

    public function aplicarDesconto(){
       
    }
}