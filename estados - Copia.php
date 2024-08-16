<?php

# carregar o arquivo do template
$template = file_get_contents("template.html");

# Caminho do arquivo 
$arquivo = "arquivos_de_dados/estados.csv";

# função do PHP para leitura de arquivos externos
# r indica que o arquivo será aberto apenas para leitura
$dados = fopen($arquivo, "r");

$tabela = "";
$sudeste = "";
$sul = "";
$centro_oeste = "";

# percorrer dados, até que encontre o final do arquivo
while(!feof($dados)){

    # pegar a linha atual
    $linha = fgets($dados);
    # dividir a linha atual e gerar um array, usando o ; como referência
    $colunas = explode(";",$linha);

    # verificar se existe todos os itens no array
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
                <th class='text-end'>$rural</th>
                <th class='text-end'>$urbana</th>
                <th class='text-end'>$pop2010</th>
                <th class='text-end'>$quantidade_cidades</th>
                <th>$capital</th>
            </tr>";
        }else{

            # formatar com 0 casas decimais, nenhum separador decimal e o ponto como
            # separador de milhar
            $homens_f = number_format($homens,0,"",".");
            $mulheres_f = number_format($mulheres,0,"",".");
            $rural_f = number_format($rural,0,"",".");
            $urbana_f = number_format($urbana,0,"",".");
            $pop2010_f = number_format($pop2010,0,"",".");

            # Mostrar os estados com população de mulheres maior que homens

            $corFundo = "";
            if($quantidade_cidades > 300){
                $corFundo = "bg-primary-subtle";
            } 
            if($quantidade_cidades < 100){
                $corFundo = "bg-success-subtle";
            }             

            $tabela_linha="
            <tr>
                <td class='$corFundo'>$uf</td>
                <td class='$corFundo'><a href='municipios.php?uf=$uf'>$nomeEstado</a></td>
                <td class='text-end $corFundo'>$homens_f</td>
                <td class='text-end $corFundo'>$mulheres_f</td>
                <td class='text-end $corFundo'>$rural_f</td>
                <td class='text-end $corFundo'>$urbana_f</td>
                <td class='text-end $corFundo'>$pop2010_f</td>
                <td class='text-end $corFundo'>$quantidade_cidades</td>
                <td class='$corFundo'>$capital</td>
            </tr>";
            

            if($uf=='SP' or $uf=='MG' or $uf=='RJ' or $uf=='ES'){
                $sudeste.=$tabela_linha;
            }
            if($uf=='PR' or $uf=='SC' or $uf=='RS'){
                $sul.=$tabela_linha;
            }
            if($uf=='GO' or $uf=='DF' or $uf=='MT' or $uf=='MS'){
                $centro_oeste.=$tabela_linha;
            }

        }
    }
}

$tabela .= "<tr><td colspan='9'>Região Sudeste</td></tr>$sudeste"; 
$tabela .= "<tr><td colspan='9'>Região Sul</td></tr>$sul"; 
$tabela .= "<tr><td colspan='9'>Região Centro-Oeste</td></tr>$centro_oeste"; 

$titulo = "Dados populacionais dos estados brasileiros";

# localizar a marcação [[titulo]] e substituir pelo conteúdo da variável
# titulo.
$template = str_replace("[[titulo]]",$titulo, $template);
$template = str_replace("[[tabela]]",$tabela, $template);

echo $template;
