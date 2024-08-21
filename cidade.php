<?php

$cidadeParametro = $_GET["codigo"];
$ufParametro = $_GET["uf"];

include('uteis.php');
include('info_estado.php');

# Carregaro arquivo do tamplate
$tamplate = file_get_contents("tamplate.html", "r");

# Caminho do arquivo
$arquivo = "arquivos_de_dados/municipios.csv";

# Função PHP para leitura de arquivos externos
# "r" indica que o arquivo será aberto apenas para a leitura.
$dados = fopen($arquivo, "r");

$cidade = "";
$titulo = "";
$info_estado = "";

# Percorrer dados, até que encontre o final do arquivo
while (!feof($dados)) {

  # Pegar a linha atual
  $linha = fgets($dados);

  # Dividir a linha atual e gerer um array, usando o ; como referência
  $colunas = explode(";", $linha);

  # Verificar se existe todos os itens no array
  if (count($colunas) >= 10) {

    $codigo = $colunas[0];
    $uf = $colunas[1];
    $municipio = $colunas[2];
    $pop2000 = $colunas[3];
    $homens = $colunas[4];
    $mulheres = $colunas[5];
    $urbana = $colunas[6];
    $rural = $colunas[7];
    $pop2010 = $colunas[8];
    $pop2021 = $colunas[9];


    if ($cidadeParametro == $codigo) {

      $info_estado = "<p class='fs-3'>Estado: <strong>$uf | $nomeEstados[$uf]</strong></p>";

      # Definição dos percentuais da população
      $percentualBase = $pop2021 + ($pop2021 * 0.1);
      $porc_2000 = $pop2000 / $percentualBase * 100;
      $porc_2010 = $pop2010 / $percentualBase * 100;
      $porc_2021 = $pop2021 / $percentualBase * 100;
      
      # Define os percentuais da população Urbana e Rural
      $percentualUrbana = $urbana / $pop2010 * 100;
      $percentualRural = $rural / $pop2010 * 100;
      $percentualHomens = $homens / $pop2010 * 100;
      $percentualMulheres = $mulheres / $pop2010 * 100;


      $pop2000_f = number_format($pop2000, 0, "", ".");
      $pop2010_f = number_format($pop2010, 0, "", ".");
      $pop2021_f = number_format($pop2021, 0, "", ".");
      $rural_f = number_format($rural, 0, "", ".");
      $urbana_f = number_format($urbana, 0, "", ".");
      $homens_f = number_format($homens, 0, "", ".");
      $mulheres_f = number_format($mulheres, 0, "", ".");

      // echo "$percentualBase | $porc_2000 | $porc_2010 | $porc_2021";

      # Concatena o conteúdo da variável que já foi utilizada na linha 41 ( .= )
      $info_estado .= "
      <div class='col-md-12 mb-4'>
        <div class='mb-2 progress' role='progressbar' style='height: 30px' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'>
          <div class='progress-bar' style='width: $porc_2000%'>$pop2000_f em 2000</div>
        </div>
        <div class='mb-2 progress' role='progressbar' style='height: 30px' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'>
          <div class='progress-bar' style='width: $porc_2010%'>$pop2010_f em 20210</div>
        </div>
        <div class='mb-2 progress' role='progressbar' style='height: 30px' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'>
          <div class='progress-bar' style='width: $porc_2021%'>$pop2021_f em 2021</div>
        </div>
      </div>";

      

      $info_estado .= "
      <div class='col-md-12 mb-4'>
        <div class='d-flex justify-content-between'>
          <i class=' ms-2 bi bi-building-fill text-primary'></i>
          <i class='me-2 bi bi-tree-fill text-success'></i>
        </div>

        <div class='progress-stacked mb-4'>
          <div class='progress' role='progressbar' style='width: $percentualUrbana%'>
            <div class='progress-bar bg-primary'>$urbana_f</div>
          </div>
          <div class='progress' role='progressbar' style='width: $percentualRural%'>
            <div class='progress-bar bg-success'>$rural_f</div>
          </div>
        </div>

        <div class='d-flex justify-content-between'>
          <i class='ms-2 bi bi-person-standing text-info'></i>
          <i class='me-2 bi bi-person-standing-dress pink'></i>
        </div>

        <div class='progress-stacked mb-4'>
          <div class='progress' role='progressbar' style='width: $percentualHomens%'>
            <div class='progress-bar bg-info'>$homens_f</div>
          </div>
          <div class='progress' role='progressbar' style='width: $percentualMulheres%'>
            <div class='progress-bar bg-warning'>$mulheres_f</div>
          </div>
        </div>
        </div>
      ";

      if ($ufParametro == 'DF') {
        $titulo = "Cidade de " . $municipio;
      } else {
        // $titulo = 'Estado ' . $nomeEstados[$ufParametro];
        $titulo = 'Cidade - '. $municipio;

      }
    }
  }
}

# Localizar a marcação [[titulo]] e subistituir pelo conteudo da variavel $titulo
$tamplate = str_replace("[[titulo]]", $titulo, $tamplate);
$tamplate = str_replace("[[conteudo]]", $info_estado, $tamplate);
$tamplate = str_replace("[[tabela]]", "", $tamplate);
$tamplate = str_replace("[[conteudo-municipio]]", $cidade, $tamplate);

echo $tamplate;