<?php

# carregar o arquivo do template
$template = file_get_contents("template.html");

# Caminho do arquivo 
$arquivo = "arquivos_de_dados/estados.csv";

# função do PHP para leitura de arquivos externos
# r indica que o arquivo será aberto apenas para leitura
$dados = fopen($arquivo, "r");

$conteudo = "";

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
        
        # formatar com 0 casas decimais, nenhum separador decimal e o ponto como
        # separador de milhar
        // $homens_f = number_format($homens,0,"",".");
        // $mulheres_f = number_format($mulheres,0,"",".");
        // $rural_f = number_format($rural,0,"",".");
        // $urbana_f = number_format($urbana,0,"",".");
        // $pop2010_f = number_format($pop2010,0,"",".");

        $conteudo.="<div class='col-4 mb-4'>
            <div class='card'>
                <div class='card-body text-center'>
                    <span class='fw-bold'>$uf - $nomeEstado</span><br>
                    <span class='fs-7'>
                        <i class='bi bi-person-standing text-info'></i> 49,85%
                        <i class='bi bi-person-standing-dress text-danger'></i> 51,12%
                    </span>
                    <br>
                    <span class='fs-7'>
                        <i class='bi bi-tree-fill text-success'></i> 13,25%
                        <i class='bi bi-building-fill text-primary'></i> 86,69%
                    </span>
                    <br>
                    <a href='municipios.php?uf=$uf'>Ver municípios</a>
                </div>
            </div>
        </div>";

    }
}

$titulo = "Dados populacionais dos estados brasileiros";

# localizar a marcação [[titulo]] e substituir pelo conteúdo da variável
# titulo.
$template = str_replace("[[titulo]]",$titulo, $template);
$template = str_replace("[[conteudo]]",$conteudo, $template);
$template = str_replace("[[tabela]]","", $template);

echo $template;