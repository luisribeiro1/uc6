<?php

# Carregaro arquivo do tamplate
$tamplate = file_get_contents("tamplate.html", "r");

# Caminho do arquivo
$arquivo = "arquivos_de_dados/estados.csv";

# Função PHP para leitura de arquivos externos
# r indica que o arquivo será aberto apenas para a leitura.
$dados = fopen($arquivo, "r");

$tabela = "";

$centroOeste = "";
$norte = "";
$nordeste = "";
$sul = "";
$sudeste = "";

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

    if ($tabela == "") {
      $tabela .= "
            <tr>
                <th>$uf</th>
                <th>$nomeEstado</th>
                <th class='text-end'>$homens</th>
                <th class='text-end'>$mulheres</th>
                <th class='text-end'>$rural</th>
                <th class='text-end'>$urbana</th>
                <th class='text-end'>$pop2010</th>
                <th class='text-center'>$capital</th>
                <th class='text-center'>$quantidade_cidades</th>
            </tr>
            ";
    } else {

        $homens_f = number_format($homens, 0, "", ".");
        $mulheres_f = number_format($mulheres, 0, "", ".");
        $urbana_f = number_format($urbana, 0, "", ".");
        $rural_f = number_format($rural, 0, "", ".");
        $pop2010_f = number_format($pop2010, 0, "", ".");
        $quantidade_cidades_f = number_format($pop2010, 0, "", ".");

      // $centroOeste = "";
      // ['MT', 'MS', 'GO', 'DF'];
      // $norte = "";
      // ['AM', 'PA', 'AC', 'RO', 'RR', 'AP', 'TO'];
      // $nordeste = "";
      // ['MA', 'PI', 'CE', 'RN', 'PB', 'PE', 'AL', 'SE', 'BA'];
      // $sul = "";
      // ['PR', 'SC', 'RS'];
      // $sudeste = "";
      // ['MG', 'SP', 'RJ', 'ES'];
      // $centroOeste_f = implode(", ",$centroOeste);

      if ($quantidade_cidades > 300 ) {
        $corFundo = 'bg-primary-subtle';

      } elseif ($quantidade_cidades < 100) {
          $corFundo = 'bg-success-subtle';

        } else {
          $corFundo = 'bg-secondary-subtle';
        }

        $tabela_linha = "
                <tr>
                    <td class='$corFundo'>$uf</td>
                    <td class='$corFundo'>$nomeEstado</td>
                    <td class='text-end $corFundo'>$homens_f</td>
                    <td class='text-end $corFundo'>$mulheres_f</td>
                    <td class='text-end $corFundo'>$rural_f</td>
                    <td class='text-end $corFundo'>$urbana_f</td>
                    <td class='text-end $corFundo'>$pop2010_f</td>
                    <td class='text-center $corFundo'>$capital</td>
                    <td class='text-center $corFundo'>$quantidade_cidades</td>
                </tr>
                ";

        if ($uf=='MT' || $uf=='MS' || $uf=='GO' || $uf=='DF') {
          $centroOeste.=$tabela_linha;

        } elseif  ($uf=='AM'|| $uf=='PA' || $uf=='AC' || $uf=='RO' || $uf=='RR'|| $uf=='AP' || $uf=='TO') {
          $norte.=$tabela_linha;

        } elseif ($uf=='MA' || $uf=='PI' || $uf=='CE' || $uf=='RN' || $uf== 'PB' || $uf== 'PE' || $uf=='AL' || $uf=='SE' || $uf== 'BA') {
          $nordeste.=$tabela_linha;

        } elseif ($uf=='PR' || $uf=='SC' || $uf=='RS') {
          $sul.=$tabela_linha;

        } elseif ($uf=='MG'|| $uf=='SP'|| $uf=='RJ'|| $uf=='ES') {
          $sudeste.=$tabela_linha;
        }
      }
    } 
  }

  $tabela.= "<tr><td colspan'9' class='bg-info-subtle'><b>Região Centro Oeste</b></tr></td>$centroOeste";
  $tabela.= "<tr><td colspan'9' class='bg-info-subtle'><b>Região Centro Oeste</b></tr></td>$norte";
  $tabela.= "<tr><td colspan'9' class='bg-info-subtle'><b>Região Centro Oeste</b></tr></td>$nordeste";
  $tabela.= "<tr><td colspan'9' class='bg-info-subtle'><b>Região Centro Oeste</b></tr></td>$sul";
  $tabela.= "<tr><td colspan'9' class='bg-info-subtle'><b>Região Centro Oeste</b></tr></td>$sudeste";


$titulo = "Dados populacionais dos estados brasileiros";

# Localizar a marcação [[titulo]] e subistituir pelo conteudo da variavel $titulo
$tamplate = str_replace("[[titulo]]", $titulo, $tamplate);
$tamplate = str_replace("[[tabela]]", $tabela, $tamplate);

echo $tamplate;
