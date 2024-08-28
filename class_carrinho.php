<?php

# Diz ao PHP que iremos manipular sessões nesta página
session_start();

class Carrinho {
  # Método construtor
  public function __construct() {
    if (!isset($_SESSION['carrinho'])) {  // Se a sessão não existir...
      $_SESSION['carrinho'] = [];   // crio a sessão com um array vazio
  }
  }

  public function adicionar($item) {  // recebe o array como parâmetro
    $_SESSION['carrinho'] [] = $item;
  }

  public function remover($indice) {

  }

  public function listar() {
    return $_SESSION['carrinho'];
  }

}