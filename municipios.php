<?php
# Pegar o parâmentro uf na url, e $_GET captura parâmentros na url
$ufParametro = $_GET["uf"];

include('uteis.php');

# Carregar o arquivo do template
$template = file_get_contents("template.html");

# Caminho do arquivo
$arquivo = "arquivos_de_dados/municipios.csv";

$dados = fopen($arquivo, "r");

$tabela = "";
$ufAnterior = "";

while(!feof($dados)){

    $linha = fgets($dados);

    $coluna = explode(";", $linha);

    if(count($coluna) >= 9){
        
        $codigo = $coluna[0];
        $uf = $coluna[1];
        $municipio = $coluna[2];
        $pop2000 = $coluna[3];
        $homens = $coluna[4];
        $mulheres = $coluna[5];
        $rural = $coluna[7];
        $urbana = $coluna[6];
        $pop2021 = $coluna[9];

        

        if($tabela==""){
            $tabela.="
            <tr>
                <th class='text-center'>$codigo</th>
                <th class='text-center'>$uf</th>
                <th class='text-center'>$municipio</th>
                <th class='text-end'>$homens</th>
                <th class='text-end'>$mulheres</th>
                <th class='text-end'>$urbana</th>
                <th class='text-center'>$rural</th>
                <th class='text-end'>$pop2000</th>
                <th class='text-center'>$pop2021</th>
            </tr>    
            ";

            
        }else{
            
            # Formatar com 0 casas decimais, nenhum separador decimal e o ponto como separador de milhar
            $homens_f = number_format($homens,0,"",".");
            $mulheres_f = number_format($mulheres,0,"",".");
            $urbana_f = number_format($urbana,0,"",".");
            $rural_f = number_format($rural,0,"",".");
            $pop2021_f = number_format($pop2021,0,"",".");
            $pop2000_f = number_format($pop2000,0,"",".");

            if($ufParametro==$uf){
            
            $tabela.="
            <tr>
            <td class='text-center'>$codigo</td>
            <td class='text-center'>$uf</td>
            <td class='text-center'>$municipio</td>
            <td class='text-end'>$homens_f</td>
            <td class='text-end'>$mulheres_f</td>
            <td class='text-end'>$urbana_f</td>
            <td class='text-end'>$rural_f</td>
            <td class='text-end'>$pop2000_f</td>
            <td class='text-center'>$pop2021_f</td>
            </tr>    
            ";


            $ufAnterior= $uf;
        }
    }
}
}


$titulo = $principio . $nomesEstados[$ufParametro];
# Localizar a marcação [[titulo]] e substituir pelo conteúdo da variável titulo
$template = str_replace("[[titulo]]",$titulo, $template);
$template = str_replace("[[tabela]]",$tabela, $template);

echo $template;
