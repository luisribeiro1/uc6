<?php


# Diz ao PHP que iremos amnipular sessões nesta página
session_start();

class Carrinho {

    #metodo contrutor
    public function __construct(){

        #se a sessão nao exitir 
        if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = []; // Cria a sessão com um array vazio
    }
    }

    public function adicionar($item){ // Recebe o array como parametro
        $_SESSION['carrinho'][] = $item;
    }
    public function remover($indice){

    }
    public function listar(){
        return $_SESSION['carrinho'];
    }
}