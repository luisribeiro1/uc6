<?php

// Diz ao PHP que iremos manipular sessões nesta página
session_start();

class Carrinho {

    // Método construtor
    public function __construct() {
        // Se a sessão não existir, cria a sessão com um array vazio para o carrinho
        if (!isset($_SESSION['carrinho'])){
            $_SESSION['carrinho'] = [];
        }

        // Inicializa o desconto como 0 se não estiver definido
        if (!isset($_SESSION['desconto'])){
            $_SESSION['desconto'] = 0; // Valor numérico para desconto
        }
    }

    // Adiciona um item ao carrinho
    public function adicionar($item) {
        $_SESSION['carrinho'][] = $item;
    }
    
    // Remove um item do carrinho pelo índice
    public function remover($indice) {
        if (isset($_SESSION['carrinho'][$indice])) {
            unset($_SESSION['carrinho'][$indice]);
            // Reindexa o array para evitar buracos nos índices
            $_SESSION['carrinho'] = array_values($_SESSION['carrinho']);
        }
    }
    
    // Retorna o conteúdo do carrinho
    public function listar() {
        return $_SESSION['carrinho'];
    }

    // Aplica um desconto percentual ao carrinho
    public function aplicarDesconto($percentual) {
        if ($percentual >= 0 && $percentual <= 100) {
            $_SESSION['desconto'] = $percentual;
        } else {
            // Define como 0 se o percentual não for válido
            $_SESSION['desconto'] = 0;
        }
    }

    // Retorna o percentual de desconto aplicado
    public function pegarDesconto() {
        return $_SESSION['desconto'];
    }
}
