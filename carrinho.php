<?php
require_once 'class_carrinho.php';

#criar a lista de produtos
$produtos = ["Arroz", "Feijão", "Batata", "Azeite", "Miojo", "Bolacha", "Queijo", "Banana"];

$listaProdutos = "";
foreach($produtos as $produto){
    $listaProdutos.= "<option>$produto</option>";

}
# Criar o objeto $carrinho instanciando a classe Carrinho()
$carrinho = new Carrinho();

#Verificar se o formulário foi submetido
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $item = [
        'nomeProduto' => $_POST['nomeProduto'],
        'quantidade' => $_POST['quantidade'],
        'preco' => $_POST['preco']
    ];
    $carrinho-> adicionar($item);
}
#preencher a variavel $array_itens com o array da sessao que o metodo listar devolverá
$array_itens = $carrinho->listar();

$carrinhoVazio = "";
$carrinho_html= "";

if(empty($array_itens)){
    $carrinhoVazio = "<p class='alert alert-info'>Nenhum item no carrinho</p>";
}else{
    foreach($array_itens as $indice => $unidade){
       $nome = $unidade['nomeProduto'];
       $quantidade = $unidade['quantidade'];
       $preco = $unidade['preco'];
        
       $carrinho_html.= "
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




#importar o template
$html = file_get_contents("template_carrinho.html");
$html = str_replace("[[listaProdutos]]", $listaProdutos, $html);
$html = str_replace("[[carrinho_vazio]]", $carrinhoVazio, $html);
$html = str_replace("[[carrinho]]", $carrinho_html, $html);

echo $html;
