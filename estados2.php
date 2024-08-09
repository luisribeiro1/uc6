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
$sul = "";
$sudeste = "";
$nordeste = "";
$centroOeste = "";

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
        $quantidade_cidades = $colunas[10];
        $capital = $colunas[11];
        $gentilico = $colunas[12];
        
        
        
        if ($tabela == "") {
            $tabela.="
            <tr>
                <th>$uf</th>
                <th>$nomeEstado</th>
                <th>$cidades</th>
                <th>$homens</th>
                <th>$mulheres</th> 
                <th>$pop2021</th>
                <th>$urbana</th>
                <th>$capital</th>
            </tr>
            ";
        }else{
            # Formatar com 0 casas decimais, nenhum separador decimal e o ponto como separador de milhar.
            $homens_f = number_format($homens,0,"",".");
            $mulheres_f = number_format($mulheres,0,"",".");
            $pop2021_f = number_format($pop2021,0,"",".");
            $rural_f = number_format($rural,0,"",".");
            $urbana_f = number_format($urbana,0,"",".");
            $quantidade_cidades = number_format($cidades,0,"",".");

            # Mostra os estados onde a quantidade de mulheres são maiores que homens.
            // if ($mulheres > $homens)
            
            if($quantidade_cidades >= 300){
                $corFundo = "bg-info-subtle";
            }else if($quantidade_cidades <= 100){
                $corFundo = "bg-success-subtle";
            }
            else{
                $corFundo = "bg-secondary-subtle";
            }
            
            $sul =  "SC";
             
            if($uf == $sul){
                $tabela.="
                <tr>
                    <td class='$corFundo'>$uf</td>
                    <td class='$corFundo'>$nomeEstado</td>
                    <td class='$corFundo'>$cidades</td>
                    <td class='$corFundo'>$homens_f</td>
                    <td class='$corFundo'>$mulheres_f</td>
                    <td class='$corFundo'>$pop2021_f</td>
                    <td class='$corFundo'>$urbana_f</td>
                    <td class='$corFundo'>$capital</td>
                </tr>
                ";
            }



            $tabela.="
            <tr>
                <td class='$corFundo'>$uf</td>
                <td class='$corFundo'>$nomeEstado</td>
                <td class='$corFundo'>$cidades</td>
                <td class='$corFundo'>$homens_f</td>
                <td class='$corFundo'>$mulheres_f</td>
                <td class='$corFundo'>$pop2021_f</td>
                <td class='$corFundo'>$urbana_f</td>
                <td class='$corFundo'>$capital</td>
            </tr>
            ";
        }    
    }
    
}

$tabela = $sul;

$titulo = "Dados Populacionais dos Estados brasileiros.";

#Localizar a marcação [[titulo]] e substituir pelo conteúdo da variável $titulo.
$template = str_replace("[[titulo]]", $titulo, $template);
$template = str_replace("[[tabela]]", $tabela, $template);

echo $template;