<?php

# Pegar o parametro uf na url . $_GET captura parametros na url
$ufParametro = $_GET["uf"];
echo $ufParametro; 



# carregar o arquivo do template 
$template = file_get_contents("template.html", "r");
# Caminho do arquivo
$arquivo = "arquivo_de_dados/municipios.csv";


# função do PHP para leitura de arquivos externos 
$dados = fopen($arquivo, "r");

$tabela = "";
$ufAnterior = "";




#percorrer dados, até que encontre o final do arquivo
# 'r'  indica que o arquivo será aberto apenas para leitura
while(!feof($dados)){

    # pegar a linha atual
    $linha = fgets($dados);

    # dividir a linha atual e gerar um array, usando o ; como referencia 
    $colunas = explode(";", $linha);

    # verificar se existe todos os items do array
    if(count($colunas) >= 10){


    $codigo = $colunas[0];
    $Estado = $colunas[1];
    $uf = $colunas[2];
    $pop2000 = $colunas[3];
    $homens = $colunas[4];
    $mulheres = $colunas[5];
    $urbana = $colunas[6];
    $rural = $colunas[7];
    $pop2010 = $colunas[8];
    $pop2021 = $colunas[9];
   

    if($tabela==""){
$tabela.="
<tr class =''>
    <th>$codigo</th>
    <th>$Estado</th>
    <th> $uf</th>
    <th class='text-end'> $pop2000</th>
    <th class='text-end'> $homens</th>
    <th class='text-end'>$mulheres</th>
    <th class='text-end'>$urbana</th>
    <th class='text-end'>$rural</th>
    <th class='text-end'>$pop2010</th>
    <th class='text-end'>$pop2021</th>
</tr>";
}else{

    
    # formatar com 0 casas decimais, nenhum separador decimal e o ponto como separador de milhar
    $homens_f = number_format($homens,0,"",".");
    $mulheres_f = number_format($mulheres,0,"",".");
    $rural_f = number_format($rural,0,"",".");
    $urbana_f = number_format($urbana,0,"",".");
    $pop2010_f = number_format($pop2010,0,"",".");
    $pop2021_f = number_format($pop2021,0,"",".");

    if($ufParametro==$uf){

         if($ufAnterior ! = $uf){

           $tabela.="<tr><td colspan='9'>Estado de $uf</td></tr>";
    }   
    
    

    $tabela.="
    <tr class = ''>
        <td>$codigo</td>
        <td>$Estado</td>
        <td> $uf</td>
        <td class='text-end'> $pop2000</td>
        <td class='text-end'> $homens</td>
        <td class='text-end'>$mulheres</td>
        <td class='text-end'>$pop2010</td>
        <td class='text-end'>$urbana</td>
        <td class='text-end'>$rural</td>
        <td class='text-end'>$pop2010</td>
        <td class='text-end'>$pop2021</td>
    </tr>";

}
    }
}

$titulo = "Municipios do Brasil";

# localizar a marcaçao [[titulo]] e substituir pelo conteudo da variavel
#titulo
$template = str_replace("[[titulo]]", $titulo, $template);
$template = str_replace("[[tabela]]", $tabela, $template);

echo $template;

# if(($ufAnterior != $uf){
# $tabela  
# }