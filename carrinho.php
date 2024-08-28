<?php

require_once 'class_carrinho.php';

# Criar a lista de produtos
$produtos = ["Arroz","feijao","Batata","Azeite","Miojo","Bolacha","Queijo","Banana"];

$listaProdutos = "";
foreach($produtos as $produto){
    $listaProdutos .= "<option>$produto</option";

}

$carrinho_vazio = "<p class= 'alert alert-info'>Nemhum item no carrinho </p>";

# criar o objeto $carrinho instanciando a classe carrinho()
$carrinho = new carrinho();

# verifica se o formulario foi submetido
if ($_SERVER['ReQUEST_METHOD']=='POST'){
    $item =[
        'nomeProduto'=>$_POST['nomeproduto'],
        'quantidade'=> $_POST['quantidade'],
        'preco' => $_POST['preco'],
    ];
    $carrinho->adicionar($item);

}
var_dump($carrinho->listar());

# preencher a variavel $array_itens com o array da sessão que o metodo listar devolverá 
$array_itens = $carrinho->listar();

$carrinho_vazio = "";
$carrinho = ""; 
if (empty($array_itens)){
    $carrinho_vazio = "<p class='alert alert-info >nemhum item no carrinho </p>";

}else{
    foreach($array_itens as $indice => $unudade){
        $nome = $unidade['nomeProduto'];
        $quantidade = $unidade['quantidade'];
        $preco = $unidade['preco'];
        
        $carrinho_html.="

        <tr>
        <td>$nome</td>
        <td>$quantidade</td>
        <td>$preco</td>
        <td></td>
        <td></td>
        </tr>";
    }    


}
# importar o template

$html = file_get_contents('templete_carrinho.html');
$html = str_replace("[[listaProduto]]",$listaProdutos, $html);
$html = str_replace("[[carrinho-vazio]]",$carrinho_vazio,$html);
$html = str_replace("[[carrinho]]",$carrinho_html,$html);

echo $html;




