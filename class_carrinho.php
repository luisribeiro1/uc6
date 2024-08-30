<?php

# Diz ao PHP que iremos manipular sessões nesta pagina
session_start();


class Carrinho{

        # Metodo construtor
    public function ___construct(){

        # se a sessão nao existir
        if (!isset($_SESSION['carrinho'])){
        $_SESSION['carrinho'] = []; // cria a sessão com array vazio
        $_SESSION['desconto'] = 0; // cria a sessão com array vazio
      }
      
    }

    public function adicionar($item){ // recebe o array como parametro
        $_SESSION['carrinho'] [] = $item;
    }

    public function remover($indice){
        unset($_SESSION['carrinho'][$indice]);
    }

    public function listar(){
        return $_SESSION ['carrinho'];
    }
    public function aplicarDesconto($desconto){
         $_SESSION ['desconto'] = $desconto;
    }
    
    public function pegarDesconto(){
        return $_SESSION ['desconto'];
    }






}
























