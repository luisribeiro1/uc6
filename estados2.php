<?php

# Carregaro arquivo do tamplate
$tamplate = file_get_contents("tamplate.html", "r");

# Caminho do arquivo
$arquivo = "arquivos_de_dados/estados.csv";

# Função PHP para leitura de arquivos externos
# r indica que o arquivo será aberto apenas para a leitura.
$dados = fopen($arquivo, "r");

$conteudo = "";

# Percorrer dados, até que encontre o final do arquivo
while (!feof($dados)) {

  # Pegar a linha atual
  $linha = fgets($dados);

  # Dividir a linha atual e gerer um array, usando o ; como referência
  $colunas = explode(";", $linha);

  # Verificar se existe todos os itens no array
  if (count($colunas) >= 13) {

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


    // $homens_f = number_format($homens, 0, "", ".");
    // $mulheres_f = number_format($mulheres, 0, "", ".");
    // $urbana_f = number_format($urbana, 0, "", ".");
    // $rural_f = number_format($rural, 0, "", ".");
    // $pop2010_f = number_format($pop2010, 0, "", ".");
    // $quantidade_cidades_f = number_format($pop2010, 0, "", ".");

    $conteudo .= "
          <div class='col-3 mb-4'>
                <div class='card shadow rounded'>
                    <div class='card-body text-center'>
                        <spna class='fw-bold'>$uf - $nomeEstado</spna>
                        <div></div>
                        <span class='fs-7'>
                            <i class='bi bi-person-standing text-info'></i>&nbsp; $homens
                            <i class='bi bi-person-standing-dress pink'></i>&nbsp; $mulheres 
                        </span>
                        <div></div>
                        <span class='fs-7'>
                            <i class='bi bi-tree-fill text-success'></i>&nbsp; $rural
                            <i class='bi bi-building-fill text-primary'></i>&nbsp; $urbana
                        </span>
                    </div>
                </div>
            </div>
        ";
  }
}

$titulo = "Dados populacionais dos estados brasileiros";

# Localizar a marcação [[titulo]] e subistituir pelo conteudo da variavel $titulo
$tamplate = str_replace("[[titulo]]", $titulo, $tamplate);
$tamplate = str_replace("[[conteudo]]", $conteudo, $tamplate);

echo $tamplate;
