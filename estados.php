<?php

# carregar o arquivo do template
$template = file_get_contents("template.html");

# Caminho do arquivo
$arquivo = "arquivos_de_dados/estados.csv";

# Função do PHP para leitura de arquivos externos
# r indica que o arquivoserá aberto apenas para leitura
$dados = fopen($arquivo, "r");

$tabela = "";

# Percorrer dados até encontrar o final do arquivo
while(!feof($dados)){
    
    # Pegar a linha atual
    $linha = fgets($dados);
    
    # dividir a linha atual e gerar um array, usando o ";" como referência.
    $coluna = explode(";", $linha);
    
    # verificar se existem todos os itens no array
    if(count($coluna) >= 13){

    $uf = $coluna[0];
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
    </tr>
    ";
    }else{

        # Formatar com 0 casas decimais, nenhum separador decimal e o ponto como separador de milhar
        $homens_f = number_format($homens,0,"",".");
        $mulheres_f = number_format($mulheres,0,"",".");
        $urbana_f = number_format($urbana,0,"",".");
        $rural_f = number_format($rural,0,"",".");
        $pop2010_f = number_format($pop2010,0,"",".");

        if($mulheres > $homens) {
        $tabela.="
    <tr>
        <td class='text-center'>$uf</td>
        <td class='text-center'>$nomeEstado</td>
        <td class='text-center'>$homens_f</td>
        <td class='text-center'>$mulheres_f</td>
        <td class='text-center'>$urbana_f</td>
        <td class='text-center'>$rural_f</td>
        <td class='text-center'>$pop2010_f</td>
        <td class='text-center'>$capital</td>
    </tr>
    ";
    }
    }
    }

}

$titulo = "Dados populacionais dos Estados Brasileiros";

# Localizar a marcação "[[titulo]]" e substituir pelo conteúdo da variável $titulo
$template = str_replace("[[titulo]]", $titulo, $template);
$template = str_replace("[[tabela]]", $tabela, $template);

echo $template;