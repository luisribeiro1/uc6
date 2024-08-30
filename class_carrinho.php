<?php

# Diz ao PHP que iremos manipular sessões nesta página
session_start();

class Carrinho {
    
    
    public function __construct() {

        if(!isset($_SESSION['carrinho'])) {                     //mostra se existe algo em PHP

            $_SESSION['carrinho'] = [];  
            $_SESSION['desconto'] = 0;    // Cria a sessão com um array vazio
        }
       
    }
    public function adicionar($item){ // Recebe o array como parâmetro
        $_SESSION['carrinho'][] = $item;
    }
    public function remover($indice){
        unset($_SESSION['carrinho'][$indice]);
    }
    public function listar(){
        return $_SESSION['carrinho'];
    }


    public function aplicarDesconto($desconto){
        $_SESSION['desconto'] = $desconto;
    }
    public function pegarDesconto(){
        return $_SESSION['desconto'];
    }

    
}