<?php

# carregar o arquivo do template
$template = file_get_contents("template.html");

# Caminho do arquivo
$arquivo = "Arquivo_de_dados/Estado.csv";

# Função do PHP para leitura de arquivos externos
# r indica que o arquivoserá aberto apenas para leitura
$dados = fopen($arquivo, "r");

$conteudo = "";

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

    
    
    # Formatar com 0 casas decimais, nenhum separador decimal e o ponto como separador de milhar
    // $homens_f = number_format($homens,0,"",".");
    // $mulheres_f = number_format($mulheres,0,"",".");
    // $urbana_f = number_format($urbana,0,"",".");
    // $rural_f = number_format($rural,0,"",".");
    // $pop2010_f = number_format($pop2010,0,"",".");
    
    $conteudo.="
                <div class='col-3 mb-3'>
            <div class='card'>
                <div class='card-body text-center'>
                    <span class='fw-bold'>$uf - $nomeEstado</span><br>
                    <span class='fs-7'>
                        <i class='bi bi-person-standing text-info'></i>$homens
                        <i class='bi bi-person-standing-dress text-danger'></i>$mulheres
                    </span>
                    <br>
                    <span class='fs-7'>
                        <i class='bi bi-tree-fill text-success'></i>$rural
                        <i class='bi bi-building-fill text-primary'></i>$urbana
                    </span>
                </div>
            </div>
        </div>";

    }
}

$titulo = "Dados populacionais dos Estados Brasileiros";

# Localizar a marcação "[[titulo]]" e substituir pelo conteúdo da variável $titulo
$template = str_replace("[[titulo]]", $titulo, $template);
$template = str_replace("[[conteudo]]", $conteudo, $template);

echo $template;