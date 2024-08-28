<?php

# Diz ao PHP que iremos manipular sessões nesta página
session_start();

class carrinho {

    # método construtor
    public function __construct(){

        # Se a sessão não existir irá criar a sessão com array carrinho
        if(!isset($_SESSION['carrinho'])){

            $_SESSION['carrinho'] = []; // Cria a sessão com o array vazio
        }
    }

    public function adicionar($item){ // recebe o array como parâmetro
        $_SESSION['carrinho'][] = $item;
    }
    
    public function remover($indice){

    }
    
    public function listar(){
        return $_SESSION['carrinho'];
    }
}