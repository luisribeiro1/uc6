<?php

require_once 'class_carrinho.php';

# Lista de produtos
$produtos = ["Arroz","Feijão","Batata","Azeite","Miojo","Bolacha","Queijo","Banana"];

$listaProdutos = "";
foreach($produtos as $item){
    $listaProdutos .= "<option>$item</option>";
}

# criar objeto $carrinho instanciando a classe carrinho()
$carrinho = new carrinho();


# Verificar se o formulário foi submetido
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST["adicionar"])){  // botão adicionar clicado
        $item = [
            'nomeProduto' => $_POST['nomeProduto'],
            'quantidade' => $_POST['quantidade'],
            'preco' => $_POST['preco']
        ];
        $carrinho->adicionar($item);
    }elseif(isset($_POST["remover"])){
        $indice = $_POST["indice"];
        $carrinho->remover($indice);
    }
    
    if (isset($_POST['cupomDesconto'])){
        $carrinho->aplicarDesconto($_POST['desconto']);
    }

}

# Preencher a variáveç $array itens com o array da sessão que o método listar devolverá
$array_itens = $carrinho->listar();
$total = 0;
$carrinho_vazio = "";
$carrinho_html =  "";

if(empty($array_itens)){
    $carrinho_vazio = "<p class='alert alert-info'>Nenhum item no carrinho</p>";
}else{
    foreach($array_itens as $indice => $unidade){

        $nome = $unidade['nomeProduto'];
        $quantidade = $unidade['quantidade'];
        $preco = $unidade['preco'];
        $subtotal = $quantidade * $preco;
        $total +=$subtotal;                 // $total = $total + $subtotal;

        # Aplicar formatação decimal
        $preco = number_format($preco, 2, ",",".");
        $subtotal = number_format($subtotal, 2, ",",".");
        
        $carrinho_html .= "
        <tr>
        <td>$nome</td>
        <td>$quantidade</td>
        <td class='text-end'>$preco</td>
        <td class='text-end'>$subtotal</td>
        <td class='text-center'>
        <form method='post'>
        <input type='hidden' name='indice' value='$indice'>
        <button type='submit' name='remover' class='btn btn-danger'>Remover</button>
        </form>
        </td>
        </tr>
        ";
    }
}

$desconto = $carrinho->pegarDesconto();
$descontarValor = $total * $desconto / 100;
$total -= $descontarValor;

$total = number_format($total, 2, ",",".");
$desconto = number_format($descontarValor, 2,",",".");
# Implementar o total do carrinho
$carrinho_html .= "
<tr>
<td></td>
<td></td>
<td class='text-end fw-bold'>Desconto:</td>
<td class='text-end fw-bold'>$desconto</td>
<td></td>
</tr>
";
$carrinho_html .= "
<tr>
<td></td>
<td></td>
<td class='text-end fw-bold'>Total:</td>
<td class='text-end fw-bold'>$total</td>
<td></td>
</tr>
";

# Importar o tamplate
$html = file_get_contents("template_carrinho.html");
$html = str_replace("[[listaProdutos]]",$listaProdutos,$html);
$html = str_replace("[[carrinho_vazio]]",$carrinho_vazio,$html);
$html = str_replace("[[carrinho]]",$carrinho_html,$html);

echo $html;