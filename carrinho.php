<?php

require_once 'class_carrinho.php';

# criar a lista de produtos
$produtos = ["Arroz", "Feijão", "Batata", "Azeite", "Miojo", "Bolacha", "Queijo", "Banana"];

$listaProdutos = "";
foreach($produtos as $produto){
    $listaProdutos .= "<option>$produto</option>";

}

# criar o objeto carrinho instanciadno a classe Carrinho()
$carrinho = new Carrinho();

 # verificar se o formulario foi submetido
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST["adicionar"])){
    $item = [
        'nomeProduto' => $_POST['nomeProduto'],
        'quantidade' => $_POST['quantidade'],
        'preco' => $_POST['preco']
        
    ];
    $carrinho->adicionar($item);
}
elseif(isset($_POST["remover"])){
    $indice = $_POST["indice"];
    $carrinho->remover($indice);
}
if(isset($_POST["cupomDesconto"])){
    $carrinho->aplicarDesconto($_POST['desconto']);
}



}

# preencher a variavel $array_itens com o array da sessão que o metodo listar devolvera
$array_itens = $carrinho->listar();

$carrinho_vazio = "";
$carrinho_html = "";
$total = 0;

if (empty($array_itens)){
    $carrinho_vazio = "<p class='alert alert-info'>Nenhum item no carrinho</p>";
} else{
    foreach($array_itens as $indice => $unidade){

        $nome = $unidade['nomeProduto'];
        $quantidade = $unidade['quantidade'];
        $preco = $unidade['preco'];
        $subtotal = $quantidade * $preco;
        $total +=$subtotal;

        # aolicar formacao decimal
        $preco = number_format($preco,2,",",".");
        $subtotal = number_format($subtotal,2,",",".");
        
        $carrinho_html .= "
        <tr>
        <td>$nome</td>
        <td>$quantidade</td>
        <td class='text-end'>$preco</td>
        <td class='text-end'>$subtotal</td>
        <td class='text-center'>
        <form method='post'>
        <input type='hidden' name='indice' value='$indice'></input>
        <button type='submit' name='remover' class='btn btn-danger'>Remover</button>
        </form>
        </td>
        </tr>    
        
        ";
    }
    
$desconto  = $carrinho->pegarDesconto();
$descontoValor = $total * $desconto / 100;
$total -= $descontoValor;

$desconto = number_format($descontoValor,2,",",".");

}



#incluir o total do carrinho

$total = number_format($total,2,",",".");

$carrinho_html .= "
<tr>
<td></td>
<td></td>
<td class='text-end fw-bold'>Desconto</td>
<td class='text-end fw-bold'>$desconto</td>
    <td class='text-center'></td>
</tr>
<tr>
<td></td>
<td></td>
<td class='text-end fw-bold'>Total</td>
<td class='text-end fw-bold'>$total</td>
    <td class='text-center'></td>
</tr>";


# importar o template
$html = file_get_contents("template_carrinho.html");
$html = str_replace("[[listaProdutos]]", $listaProdutos,$html);
$html = str_replace("[[carrinho_vazio]]", $carrinho_vazio,$html);
$html = str_replace("[[carrinho]]", $carrinho_html,$html);

echo $html;
