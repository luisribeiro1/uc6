<?php

# Diz ao php que iremos manipular sessoes nesta pagina
session_start();

class carrinho {

   # metodo construtor
    public function __construc(){
      
        # Se a sessão não existir
        if (!isset( $_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = [];      // Criar a sessão com um array vazio
        }
        
    }

    public function adicionar($item){    //recebe o array como paremetro 
         $_SESSION['carrinho'][] = $item;
    }

    public function remover($indice){

    }

    public function listar(){
       return $_SESSION['carrinho'];
    }
}