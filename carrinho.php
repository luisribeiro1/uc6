<?php

require_once 'class_carrinho.php';


# criar a lista produtos
$produtos = ["Arroz","Feijao","Batata","Azeite","miojo","Bolacha","Queijo","Banana"];

$listaProdutos = "";
foreach($produtos as $produto){
    $listaProdutos .= "<option>$produto</option>"; 
}



# criar o objeto $carrinho instanciando a classe Carrinho()
$carrinho = new Carrinho();

# verificar se o formulario foi submetido
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $item = [
       'nomeProduto' => $_POST['nomeProduto'],
       'quantidade' => $_POST['quantidade'],
       'preco' => $_POST['preco'],
     ];
     $carrinho->adicionar($item);

    
}

# preencher a variavel #array_itens com o array da sessao que método listar devolvera
$array_itens = $carrinho->listar();

$carrinho_vazio = "";
$carrinho_html = "";

if (empty($array_itens)){
    $carrinho_vazio = "<p class='alert alert-info'>Nenhum item no carrinho</p>";
} else{
    foreach($array_itens as $indice => $unidade){
        
        $nome = $unidade['nomeProduto'];
        $quantidade = $unidade['quantidade'];
        $preco = $unidade['preco'];


        $carrinho_html .= "
        <tr>
           <td>$nome</td>
           <td>$quantidade</td>
           <td>$preco</td>
           <td></td>
           <td></td>
        </tr>
        ";

    }
}

# importa o template

$html = file_get_contents("template_carrinho.html");
$html = str_replace("[[listaProdutos]]",$listaProdutos,$html);
$html = str_replace("[[carrinho_vazio]]",$carrinho_vazio,$html);
$html = str_replace("[[carrinho]]",$carrinho_html,$html);

echo $html;