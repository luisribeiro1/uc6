<?php

# Carregar o arquivo do template.
$template = file_get_contents("template.html");
# Caminho do arquivo.
$arquivo = "arquivos_de_dados/estados.csv";

# Função do PHP para leitura de arquivos externos.
# "r" indica que o arquivo aberto será apenas para leitura.
$dados = fopen($arquivo, "r");



$conteudo = "";


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

        // $homens_f = number_format($homens,0,"",".");
        // $mulheres_f = number_format($mulheres,0,"",".");
        // $pop2021_f = number_format($pop2021,0,"",".");
        // $rural_f = number_format($rural,0,"",".");
        // $urbana_f = number_format($urbana,0,"",".");
        // $quantidade_cidades = number_format($cidades,0,"",".");

        if($uf == "UF" or $nomeEstado == "Estado"){
            $conteudo.= "";
        }else{
            $conteudo.="
        <div class='col-3 mb-3'>

            <div class='card '>
                <div class='card-body text-center'>
                    <span class='fw-bold'>$uf - $nomeEstado</span><br>
                    <span class='fs-6'>
                        <i class='bi bi-person-standing text-primary'></i>$homens
                        <i class='bi bi-person-standing-dress text-danger'></i> $mulheres
                    </span>
                    <br>
                    <span class='fs-6'>
                        <i class='bi bi-tree-fill text-success'></i> $rural
                        <i class='bi bi-building-fill text-info'></i> $urbana
                    </span>
                    <br>
                    <a href='municipios.php?uf=$uf'> Ver município </a>
                </div>
            </div>
        </div>
        ";    
        }
        

    }
}
    
$titulo = "Dados Populacionais dos Estados brasileiros.";

#Localizar a marcação [[titulo]] e substituir pelo conteúdo da variável $titulo.
$template = str_replace("[[titulo]]", $titulo, $template);
$template = str_replace("[[conteudo]]", $conteudo, $template); 
$template = str_replace("[[tabela]]","", $template); 

echo $template;