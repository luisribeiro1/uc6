<?php

# carregar o arquivo do template
$template = file_get_contents("template.html");

# Caminho do arquivo
$arquivo = "arquivos_de_dados/estados.csv";

# Função do PHP para leitura de arquivos externos
# r indica que o arquivoserá aberto apenas para leitura
$dados = fopen($arquivo, "r");

$tabela = "";
$sul = '';
$sudeste = '';
$centroOeste = '';
$norte = '';
$nordeste = '';

# Percorrer dados até encontrar o final do arquivo
while(!feof($dados)){
    
    # Pegar a linha atual
    $linha = fgets($dados);
    
    # dividir a linha atual e gerar um array, usando o ";" como referência.
    $coluna = explode(";", $linha);
    
    # verificar se existem todos os itens no array
    if(count($coluna) >= 13){

    $uf = $coluna[0];

    echo "$uf <br>";
    
    $nomeEstado = $coluna[1];
    $pop2000 = $coluna[2];
    $homens = $coluna[3];
    $mulheres = $coluna[4];
    $urbana = $coluna[5];
    $rural = $coluna[6];
    $pop2010 = $coluna[7];
    $pop2021 = $coluna[8];
    $quantidade_cidades = $coluna[9];
    $capital = $coluna[10];
    $gentilico = $coluna[11];
    $area = $coluna[12];
    
    }
    
    if($tabela==""){
        
    $tabela.="
    <tr>
        <th class='text-center'>$uf</th>
        <th class='text-center'>$nomeEstado</th>
        <th class='text-center'>$homens</th>
        <th class='text-center'>$mulheres</th>
        <th class='text-center'>$urbana</th>
        <th class='text-center'>$rural</th>
        <th class='text-center'>$pop2010</th>
        <th class='text-center'>$capital</th>
        <th class='text-center'>$quantidade_cidades</th>
    </tr>
    ";
    }else{

        # Formatar com 0 casas decimais, nenhum separador decimal e o ponto como separador de milhar
        $homens_f = number_format($homens,0,"",".");
        $mulheres_f = number_format($mulheres,0,"",".");
        $urbana_f = number_format($urbana,0,"",".");
        $rural_f = number_format($rural,0,"",".");
        $pop2010_f = number_format($pop2010,0,"",".");

        # Mostrar os estados que tem mais que 300 cidades e menos que 100 cidades mudando seu bg
        if($quantidade_cidades > 300){
            $corFundo = 'bg-primary-subtle';
        }elseif($quantidade_cidades < 100){
            $corFundo = 'bg-success-subtle';
        }else{
            $corFundo = '';
        }
        
        $tabela_linha="
        <tr class = ''>
        <td class='text-center $corFundo'>$uf</td>
        <td class='text-center $corFundo'>$nomeEstado</td>
        <td class='text-center $corFundo'>$homens_f</td>
        <td class='text-center $corFundo'>$mulheres_f</td>
        <td class='text-center $corFundo'>$urbana_f</td>
        <td class='text-center $corFundo'>$rural_f</td>
        <td class='text-center $corFundo'>$pop2010_f</td>
        <td class='text-center $corFundo'>$capital</td>
        <td class='text-center $corFundo'>$quantidade_cidades</td>
        </tr>
        ";


        
        if($uf == 'PR' or $uf == 'SC' or $uf == 'RS'){
            $sul.=$tabela_linha;
        }if($uf == 'SP' or $uf == 'RJ' or $uf == 'MG' or $uf == 'ES'){
            $sudeste.=$tabela_linha;
        }if($uf == 'MS' or $uf == 'MT' or $uf == 'GO' or $uf == 'DF' ){
            $centroOeste.=$tabela_linha;
        }if($uf == 'AC' or $uf == 'AM' or $uf == 'RR' or $uf == 'RO' or $uf == 'AP' or $uf == 'PA' or $uf == 'TO' ){
            $norte.=$tabela_linha;
        }if($uf == 'MA' or $uf == 'PI' or $uf == 'CE' or $uf == 'RN' or $uf == 'PB' or $uf == 'PE' or $uf == 'AL' or $uf == 'SE' or $uf == 'BA'){
            $nordeste.=$tabela_linha;

        }

    }
}

$tabela.= "<tr><td colspan ='9'><b>Região Sul</b></td></tr>$sul";
$tabela.= "<tr><td colspan = '9'><b>Região Sudeste</b></td></tr>$sudeste";
$tabela.= "<tr><td colspan = '9'><b>Região Centro-Oeste</b></td><tr>$centroOeste";
$tabela.= "<tr><td colspan = '9'><b>Região Norte</b></td><tr>$norte";
$tabela.= "<tr><td colspan = '9'><b>Região Nordeste</b></td><tr>$nordeste";

$titulo = "Dados populacionais dos Estados Brasileiros";

# Localizar a marcação "[[titulo]]" e substituir pelo conteúdo da variável $titulo
$template = str_replace("[[titulo]]", $titulo, $template);
$template = str_replace("[[tabela]]", $tabela, $template);

echo $template;