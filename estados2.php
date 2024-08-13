<?php


# Carregar o arquivo do template
$template = file_get_contents("template.html", "r");
# Caminho do arquivo
$arquivo = "arquivos_de_dados/estados.csv";

# Função do PHP para leitura de arquivos externos 
# r indica que o arquivo será aberto apenas para leitura    
$dados = fopen($arquivo, "r");
$tabela = "";
$sudeste = "";
$sul = "";
$norte = "";
$nordeste = "";
$centro_oeste = "";

# Percorrer dados, até que encontre o final do arquivo
while(!feof($dados)){
    # Pegar linha atual
    $linha = fgets($dados);
    # Dividir a linha atual e gerar um array usando o ; como referência
    $colunas = explode(";", $linha);

    # Verificar se existe todos os itens no array
    if (count($colunas) >= 13){

    $uf = $colunas[0];
    $nomeEstado = $colunas[1];
    $pop2000 = $colunas[2];
    $homens = $colunas[3];
    $mulheres = $colunas[4];
    $urbana = $colunas[5];
    $rural = $colunas[6];
    $pop2010 = $colunas[7];
    $pop2021 = $colunas[8];
    $quantidade_cidades = $colunas[9];
    $capital = $colunas[10];
    $gentilico = $colunas[11];
    $area = $colunas[12];
    


    if($tabela == ""){

    $tabela.="
    <tr>
        <th>$uf</th>
        <th>$nomeEstado</th>
        <th class='text-end'>$homens</th>
        <th class='text-end'>$mulheres</th>
        <th class='text-end'>$urbana</th>
        <th class='text-end'>$rural</th>
        <th class='text-end'>$pop2010</th>
        <th class='text-end'>$quantidade_cidades</th>
        <th class='text-center'>$capital</th>
    </tr>
    ";
}else{
    # Formatar com 0 casas decimais, nenhum separador decimal e o ponto como separador de milhar

    $homens_f = number_format($homens,0,"",".");
    $mulheres_f = number_format($mulheres,0,"",".");
    $rural_f = number_format($rural,0,"",".");
    $urbana_f = number_format($urbana,0,"",".");
    $pop2010_f = number_format($pop2010,0,"",".");
    
    $corFundo = "";
   
    if($quantidade_cidades > 299){
        $corFundo = "bg-primary-subtle";
    }elseif($quantidade_cidades < 100){
        $corFundo = "bg-secondary-subtle";
    }else{
        $corFundo = "bg-danger-subtle";
    }

    // $tabela.="
    // <tr>
    //     <td class='$corFundo'>$uf</td>
    //     <td class='$corFundo'>$nomeEstado</td>
    //     <td class='text-end $corFundo'>$homens_f</td>
    //     <td class='text-end $corFundo'>$mulheres_f</td>
    //     <td class='text-end $corFundo'>$urbana_f</td>
    //     <td class='text-end $corFundo'>$rural_f</td>
    //     <td class='text-end $corFundo'>$pop2010_f</td>
    //     <td class='text-end $corFundo'>$quantidade_cidades</td>
    //     <td class='text-center $corFundo'>$capital</td>
    // </tr>
    // ";

    
    $tabelaLinha="
    <tr>
        <td class='$corFundo'>$uf</td>
        <td class='$corFundo'><a href='municipios.php?uf=$uf'>$nomeEstado</a></td>
        <td class='text-end $corFundo'>$homens_f</td>
        <td class='text-end $corFundo'>$mulheres_f</td>
        <td class='text-end $corFundo'>$urbana_f</td>
        <td class='text-end $corFundo'>$rural_f</td>
        <td class='text-end $corFundo'>$pop2010_f</td>
        <td class='text-end $corFundo'>$quantidade_cidades</td>
        <td class='text-center $corFundo'>$capital</td>
    </tr>
    ";


     if($uf=='SC' or $uf=='RS' or $uf=='PR'){
         $sul.= $tabelaLinha;
     }elseif($uf=='SP' or $uf=='MG' or $uf=='RJ' or $uf=='ES'){
        $sudeste.= $tabelaLinha;
     }elseif($uf=='AM' or $uf=='PA' or $uf=='AC' or $uf=='RR' or $uf=='RO' or $uf=='AP' or $uf=='TO'){
        $norte.= $tabelaLinha;
     }elseif($uf=='AL' or $uf=='BA' or $uf=='CE' or $uf=='MA' or $uf=='PB' or $uf=='PN' or $uf=='PI' or $uf=='RN' or $uf=='SE'){
        $nordeste.= $tabelaLinha;
     }else{
        $centro_oeste.= $tabelaLinha;
     }

}
}
}
    
$titulo = "Dados populacionais dos estados brasileiros";
$tabela .= "<tr class='text-center'><td colspan='9'>Regiao Sul</td></tr>$sul";
$tabela .= "<tr class='text-center'><td colspan='9'>Regiao Sudeste</td></tr>$sudeste";
$tabela .= "<tr class='text-center'><td colspan='9'>Regiao Norte</td></tr>$norte";
$tabela .= "<tr class='text-center'><td colspan='9'>Regiao Centro Oeste</td></tr>$centro_oeste";
$tabela .= "<tr class='text-center'><td colspan='9'>Regiao Nordeste</td></tr>$nordeste";


// $tabela.= "<h2>Região Sul</h2>$sul";
// $tabela.= "<h2>Região Sudeste</h2>$sudeste";
// $tabela.= "<h2>Região Norte</h2>$norte";
// $tabela.= "<h2>Região Nordeste</h2>$nordeste";
// $tabela.= "<h2>Região Centro Oeste</h2>$centro_oeste";
# Localizar a marcação [[titulo]] e substituir o conteúdo da variável $titulo
$template = str_replace("[[titulo]]", $titulo, $template);
$template = str_replace("[[tabela]]", $tabela, $template);

echo $template;
