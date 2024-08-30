<?php

# Diz ao PHP que iremos manipular sessões nesta página 
session_start();

class Carrinho{
    # Método construtor
    public function __construct(){
        # Se a sessão não existir 
        if(!isset($_SESSION['carrinho'])){
            $_SESSION['carrinho'] = []; // cria a sessão com um array vazio
            $_SESSION['desconto'] = 0;
        }
    }

    public function adicionar($item){ // recebe o array como parâmetro
        $_SESSION['carrinho'][]= $item;
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