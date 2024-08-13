<?php

# Carregar o arquivo do template.
$template = file_get_contents("template.html");
# Caminho do arquivo.
$arquivo = "arquivos_de_dados/estados.csv";

# Função do PHP para leitura de arquivos externos.
# "r" indica que o arquivo aberto será apenas para leitura.
$dados = fopen($arquivo, "r");

$tabela = "";
$norte = "";
$nordeste = "";
$centroOeste = "";
$sudeste = "";
$sul = "";

# Percorrer dados, até que encontre o final do arquivo.
while(!feof($dados)) {
    # Pegar a linha atual.
    $linha = fgets($dados);
    # Dividir a linha atual e gerar um array, usando o ";" como referência.
    $colunas = explode(";", $linha);

    # Verificar se existe todos os itens no array.
    if (count($colunas) >= 13) {

        $uf = $colunas [0];
        $nomeEstado = $colunas[1];
        $pop2000 = $colunas[2];
        $homens = $colunas[3];
        $mulheres = $colunas[4];
        $urbana = $colunas[5];
        $rural = $colunas[6];
        $pop2010 = $colunas[7];
        $pop2021 = $colunas[8];
        $cidades = $colunas[9];
        $capital = $colunas[10];
        $gentilico = $colunas[11];
        $area = $colunas[12];
        
        if ($tabela == "") {
            $tabela.="
            <tr>
                <th>$uf</th>
                <th>$nomeEstado</th>
                <th>$cidades</th>
                <th>$capital</th>
                <th>$gentilico</th>
                <th>$area</th>
                <th>$homens</th>
                <th>$mulheres</th> 
            </tr>
            ";
        }else{
            # Formatar com 0 casas decimais, nenhum separador decimal e o ponto como separador de milhar.
            $homens_f = number_format($homens,0,"",".");
            $mulheres_f = number_format($mulheres,0,"",".");
            $pop2000_f = number_format($pop2000,0,"",".");
            $pop2010_f = number_format($pop2010,0,"",".");
            $pop2021_f = number_format($pop2021,0,"",".");
            $rural_f = number_format($rural,0,"",".");
            $urbana_f = number_format($urbana,0,"",".");
            
            if ($cidades >= 300) {
                $corFundo = "bg-primary-subtle";
            }else if ($cidades <= 100) {
                $corFundo = "bg-success-subtle";
            }else {
                $corFundo = "bg-secondary-subtle";
            }

            $tabela_linha ="
            <tr>
                <td class = '$corFundo'>$uf</td>
                <td class = '$corFundo'><a href='municipios.php?uf=$uf'>$nomeEstado</td>
                <td class = '$corFundo'>$cidades</td>
                <td class = '$corFundo'>$capital</td>
                <td class = '$corFundo'>$gentilico</td>
                <td class = '$corFundo'>$area</td>
                <td class = '$corFundo'>$homens_f</td>
                <td class = '$corFundo'>$mulheres_f</td>  
            </tr>
            ";

            if ($uf == 'AM' or $uf == 'RR' or $uf == 'AP' or $uf == 'PA' or $uf == 'TO' or $uf == 'RO' or $uf == 'AC') {
                $norte.=$tabela_linha;
            }elseif ($uf == 'MA' or $uf == 'PI' or $uf == 'CE' or $uf == 'RN' or $uf == 'PE' or $uf == 'PB' or $uf == 'SE' or $uf == 'AL' or $uf == 'BA') {
                $nordeste.=$tabela_linha;
            }elseif ($uf == 'MT' or $uf == 'MS' or $uf == 'GO' or $uf == 'DF') {
                $centroOeste.=$tabela_linha;
            }elseif ($uf == 'SP' or $uf == 'RJ' or $uf =='ES' or $uf == 'MG') {
                $sudeste.=$tabela_linha;
            } 

            if ($uf == 'RS' or $uf == 'PR' or $uf == 'SC') {
                $sul.=$tabela_linha;
            }
        }    
    }
}

$tabela .= "<tr><td colspan = '7'>Região Norte</td></tr>$norte";
$tabela .= "<tr><td colspan = '9'>Região Nordeste</td></tr>$nordeste";
$tabela .= "<tr><td colspan = '3'>Região Centro Oeste</td></tr>$centroOeste";
$tabela .= "<tr><td colspan = '4'>Região Sudeste</td></tr>$sudeste";
$tabela .= "<tr><td colspan = '3'>Região Sul</td></tr>$sul";
$titulo = "Dados Populacionais dos Estados brasileiros.";

#Localizar a marcação [[titulo]] e substituir pelo conteúdo da variável $titulo.
$template = str_replace("[[titulo]]", $titulo, $template);
$template = str_replace("[[tabela]]", $tabela, $template);

echo $template;