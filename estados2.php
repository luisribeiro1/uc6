<?php


# Pegar o parametro uf na url . $_GET captura parametros na url
$ufParametro = $_GET["uf"];
#echo $ufParametro; 


# carregar o arquivo do template 
$template = file_get_contents("template.html", "r");
# Caminho do arquivo
$arquivo = "arquivo_de_dados/estados.csv";


# função do PHP para leitura de arquivos externos 
$dados = fopen($arquivo, "r");

$tabela = "";
$sudeste = "";
$norte = "";
$sul = "";
$nordeste = "";
$centro = "";



#percorrer dados, até que encontre o final do arquivo
while(!feof($dados)){

    # pegar a linha atual
    $linha = fgets($dados);

    # dividir a linha atual e gerar um array, usando o ; como referencia 
    $colunas = explode(";", $linha);

    # verificar se existe todos os items do array
    if(count($colunas) >= 13){


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

    if($tabela==""){
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
    <th>$capital</th>
</tr>";
}else{

    
    # formatar com 0 casas decimais, nenhum separador decimal e o ponto como separador de milhar
    $homens_f = number_format($homens,0,"",".");
    $mulheres_f = number_format($mulheres,0,"",".");
    $rural_f = number_format($rural,0,"",".");
    $urbana_f = number_format($urbana,0,"",".");
    $pop2010_f = number_format($pop2010,0,"",".");
    $pop2021_f = number_format($pop2021,0,"",".");

if($quantidade_cidades > 300){
    $corfundo = "bg-primary-subtle";

}elseif($quantidade_cidades < 100){
    $corfundo = "bg-success-subtle";
}else{
    $corfundo = "bg-white";
}




$tabela_linha="
<tr>

    <td class= '$corfundo'>$uf</td>
    <td class='$corfundo'><a heref='municipios'.php?uf=$nomeEstado</td>      
    <td class='text-end $corfundo'>$homens_f</td>
    <td class='text-end $corfundo'>$mulheres_f</td>
    <td class='text-end $corfundo'>$urbana_f</td>
    <td class='text-end $corfundo'>$rural_f</td>
    <td class='text-end $corfundo'>$pop2010_f</td>
    <td class='text-end $corfundo'>$quantidade_cidades</td>
    <td class='$corfundo'>$capital</td>

</tr>";

if($uf=='SP' or $uf=='RJ' or $uf=='ES' or $uf=='MG'){
    $sudeste.=$tabela_linha;
}elseif($uf=='PR' or $uf=='SC' or $uf=='RS' ){
    $sul.=$tabela_linha;
}elseif($uf=='AM' or $uf=='PA' or $uf=='AC' or $uf=='RR' or $uf=='RO' or $uf=='AP' or $uf=='TO' ){
    $norte.=$tabela_linha;
}elseif($uf=='MA' or $uf=='PI' or $uf=='CE' or $uf=='RN' or $uf=='PB' or $uf=='PE' or $uf=='AL' or $uf=='SE' or $uf=='BA'){
    $nordeste.=$tabela_linha;
}else{
    $centro.=$tabela_linha;
}


        }
    }

}

$tabela .="<tr class='text-center'><td colspan='9'><h2>Região Sudeste</h2></td></tr>$sudeste";
$tabela .="<tr class='text-center'><td colspan='9'><h2>Região Nordeste</h2></td></tr>$nordeste";
$tabela .="<tr class='text-center'><td colspan='9'><h2>Região Sul</h2></td></tr>$sul";
$tabela .="<tr class='text-center'><td colspan='9'><h2>Região Norte</h2></td></tr>$norte";
$tabela .="<tr class='text-center'><td colspan='9'><h2>Região Centro-Oeste</h2></td></tr>$centro";


$titulo = "Dados populacionais dos estaos brasileiros";

# localizar a marcação [[titulo]] e substituir a variavel 
# titulo.
$template = str_replace("[[titulo]]", $titulo, $template);
$template = str_replace("[[tabela]]", $tabela, $template);

echo $template;

