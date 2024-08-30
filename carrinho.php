<?php

require_once 'class_carrinho.php';

# Criar a lista de produtos
$produtos = ["Arroz","Feijão","Batata","Azeite","Miojo","Bolacha","Queijo","Banana"];

$listaProdutos = "";
foreach($produtos as $produto){
    $listaProdutos .= "<option>$produto</option>";
}

# Criar o objeto $carrinho instanciando a classe Carrinho()
$carrinho = new Carrinho();

# Verificar se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST["adicionar"])){  // Botão adicionar clicado
    $item = [
        'nomeProduto' => $_POST['nomeProduto'],
        'quantidade' => $_POST['quantidade'],
        'preco' => $_POST['preco'],     
    ];
    $carrinho->adicionar($item);
}    
elseif(isset($_POST["remover"])){  // Qualquer botão remover clicado
    $indice = $_POST["indice"];
    $carrinho->remover($indice);
}
}

# Preencher a variável $array_itens com o array da sessão que o método listar devolverá
$array_itens = $carrinho->listar();

$carrinho_vazio = "";
$carrinho_html = "";
$total = 0;

if (empty($array_itens)){
    $carrinho_vazio = "<p class='alert alert-info'>Nenhum item no carrinho</p>";
} else {
    foreach($array_itens as $indice => $unidade){

        $nome = $unidade['nomeProduto'];
        $quantidade = $unidade['quantidade'];
        $preco = $unidade['preco'];
        $subtotal = $quantidade * $preco;
        $total +=$subtotal;     // $total = $total + $subtotal;

        # Aplicar formatação decimal
        $preco = number_format($preco, 2, ",", ".");
        $subtotal = number_format($subtotal, 2, ",", ".");
        
        $carrinho_html .= "
        <tr>
        <td>$nome</td>
        <td>$quantidade</td>
        <td class= 'text-end'>$preco</td>
        <td class= 'text-end'>$subtotal</td>
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

# Incluir o total do carrinho
$total = number_format($total, 2, ",", ".");

$carrinho_html .= "

<tr>
<td></td>
    <td></td>
    <td class= 'text-end fw-bold'>Total</td>
    <td class= 'text-end fw-bold'>$total</td>
    <td </td>
</tr>
";

# Importar o template
$html = file_get_contents("template_carrinho.html");
$html = str_replace("[[listaProdutos]]",$listaProdutos,$html);
$html = str_replace("[[carrinho_vazio]]",$carrinho_vazio,$html);
$html = str_replace("[[carrinho]]",$carrinho_html,$html);


echo $html;
