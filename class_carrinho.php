<?php

# Diz ao PHP que itens manipular sesso~es nasta pagina
session_start();

class carrinho{

     # metodo construtor
     public function __construct(){
        if (isset($_SESSION["carrinho"])[]
         $_SESSION["carrinho"] = [];     // cria a sessão com o array vazio

        }
      
    public function adicionar($item){ // recebe o array como parametro 
         $_SESSION['carrinho'][]= $item;
    }

    public function remover($indice){
    }  
}

