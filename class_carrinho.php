<?php

# Diz ao PHP que iremos manipular sessões nesta página
session_start();

class Carrinho {

    # Método construtor
    public function __construct() {

        # Se a sessão não existir
        if (!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'] = [];     // Cria a sessão com um array vazio
        }

        if (!isset($_SESSION['desconto'])){
            $_SESSION['desconto'] = [];
        }
    }

    public function adicionar($item) {
        $_SESSION['carrinho'][] = $item;
    }
    
    public function remover($indice) {
        unset($_SESSION['carrinho'][$indice]);
    }
    
    public function listar() {
        return $_SESSION['carrinho'];
    }

    public function aplicarDesconto($percentual) {
        if ($percentual >= 0 && $percentual <= 100) {
            $_SESSION['desconto'] = $percentual;
        }
    
    # Retorna o percentual de desconto aplicado
    public function pegarDesconto() {
        return $_SESSION['desconto'];
    }
    }

}