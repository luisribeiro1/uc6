<?php
require_once 'class_carrinho.php';
# Criar a lista de produtos
$produtos = ["Arroz","Feijao","Batata", "Azeite","Miojo","Bolacha","Queijo","Banana"];

$listaProdutos = "";
foreach($produtos as $produto){
    $listaProdutos .= "<option>$produto</option>";

}





#criar o obketo $carrinho distanciando a classe carrinho()
$carrinho = new Carrinho();





# VERIFICAR SE O FORMULARIO FOI SUBMETIDO
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item = [

        'nomeProduto'=> $_POST['nomeProduto'],
        'quantidade'=> $_POST['quantidade'],
        'preco'=> $_POST['preco']
    ];
   $carrinho->adicionar($item);

}
# prencher a variavel $array com o array de sessao que é metodo listar devolverar
$array_itens = $carrinho->listar();
$carrinho_vazio ="";
$carrinho_html = "";

if (empty($array_itens)) {
    $carrinho_vazio ="<p class= 'alert alert-info'> Nehum item no carrinho</p>";
}else {
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



#importar o template 
$html = file_get_contents("template_carrinho.html");
$html = str_replace("[[listaProdutos]]",$listaProdutos,$html);
$html = str_replace("[[carrinho_vazio]]",$carrinho_vazio,$html);
$html = str_replace("[[carrinho]]",$carrinho_html,$html);

echo $html;