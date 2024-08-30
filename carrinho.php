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
 
    if(isset($_POST["adicionar"])){ // botão adicionar clicado
    $item = [
        'nomeProduto' => $_POST['nomeProduto'],
        'quantidade' => $_POST['quantidade'],
        'preco' => $_POST['preco']
    ];
    $carrinho-> adicionar($item);
    }elseif(isset($_POST["remover"])){ // qualquer botão remover clicado
        $indice = $_POST["indice"];
        $carrinho->remover($indice);
    }
     
    if(isset($_POST["cupomDesconto"])){
        $carrinho->aplicarDesconto($_POST['desconto']);
    }
    
    

}
#preencher a variavel $array_itens com o array da sessao que o metodo listar devolverá
$array_itens = $carrinho->listar();

$carrinhoVazio = "";
$carrinho_html= "";
$total = 0;

if(empty($array_itens)){
    $carrinhoVazio = "<p class='alert alert-info'>Nenhum item no carrinho</p>";
}else{
    foreach($array_itens as $indice => $unidade){
       $nome = $unidade['nomeProduto'];
       $quantidade = $unidade['quantidade'];
       $preco = $unidade['preco'];
       $subtotal = $quantidade * $preco;
       $total +=$subtotal;
       
        # Aplicar formtação decimal
        $preco = number_format($preco,2, ",", ".");
        $subtotal = number_format($subtotal,2, ",", ".");
        
        
        $carrinho_html.= "
        <tr>
        <td>$nome</td>
        <td>$quantidade</td>
        <td class='text-end'>$preco</td>
        <td class='text-end'>$subtotal</td>
        <td class='text-center'>
        <form method='post'>
        <input type='hidden' name='indice' value='$indice'></input>
        <button type='submit' name='remover' class='btn btn-warning '>Remover</button>
        </form>
        </td>
        </tr>
        ";
    }


    # Incluir o total do carrinho

    $total = number_format($total,2, ",", ".");

    $desconto = $carrinho->pegarDesconto();
    $descontoValor = $total * $desconto / 100;
    $total -= $descontoValor;

    $desconto = number_format($descontoValor,2, ",", ".");
    $total = number_format($total,2, ",", ".");

    $carrinho_html.= "
    <tr>
        <td></td>
        <td></td>
        <td class='text-end fw-bold'>Desconto:</td>
        <td class='text-end fw-bold'>$desconto</td>
        <td class='text-center'></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td class='text-end fw-bold'>Total:</td>
        <td class='text-end fw-bold'>$total</td>
        <td class='text-center'></td>
    </tr>
    ";
    }

#importar o template
$html = file_get_contents("template_carrinho.html");
$html = str_replace("[[listaProdutos]]", $listaProdutos, $html);
$html = str_replace("[[carrinho_vazio]]", $carrinhoVazio, $html);
$html = str_replace("[[carrinho]]", $carrinho_html, $html);

echo $html;
