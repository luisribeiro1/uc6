<?php

# pegar a UF na url. $_GET captura parâmetros na url
$ufParametro = $_GET["uf"];
// echo $ufParametro;

# Carregaro arquivo do tamplate
$tamplate = file_get_contents("tamplate.html", "r");

# Caminho do arquivo
$arquivo = "arquivos_de_dados/municipios.csv";

# Função PHP para leitura de arquivos externos
# r indica que o arquivo será aberto apenas para a leitura.
$dados = fopen($arquivo, "r");

$tabela = "";
$ufAnterior = "";

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
    
    if ($tabela == "") {
      $tabela .= "
            <tr class='table-active'>
                <th class='text-center'>$codigo</th>
                <th class='text-center'>$uf</th>
                <th class='text-center'>$municipio</th>
                <th class='text-center'>$homens</th>
                <th class='text-center'>$mulheres</th>
                <th class='text-center'>$urbana</th>
                <th class='text-center'>$rural</th>
                <th class='text-center'>$pop2010</th>
                <th class='text-center'>$pop2021</th>
            </tr>
            ";
    } else {

      if ($mulheres > $homens) {

        $homens_f = number_format($homens, 0, "", ".");
        $mulheres_f = number_format($mulheres, 0, "", ".");
        $urbana_f = number_format($urbana, 0, "", ".");
        $rural_f = number_format($rural, 0, "", ".");
        $pop2010_f = number_format($pop2010, 0, "", ".");
        $pop2021_f = number_format($pop2021, 0, "", ".");

        
        if($uf == $ufParametro) {
          
          if ($ufAnterior <> $uf) {
            $tabela.= "<tr><td class='ps-5 table-active' colspan='9'><b>Estado de $uf</b></td></tr>";
          }

          $tabela .= "
          <tr>
          <td class='text-center'>$codigo</td>
          <td class='text-center'>$uf</td>
          <td class='text-center'>$municipio</td>
          <td class='text-center'>$homens_f</td>
          <td class='text-center'>$mulheres_f</td>
          <td class='text-center'>$rural_f</td>
          <td class='text-center'>$urbana_f</td>
          <td class='text-center'>$pop2010_f</td>
          <td class='text-center'>$pop2021_f</td>
          </tr>
          ";
          
          $ufAnterior = $uf;
        }
      }
    }
  }
}

$titulo = "Dados populacionais dos municípios brasileiros";

# Localizar a marcação [[titulo]] e subistituir pelo conteudo da variavel $titulo
$tamplate = str_replace("[[titulo]]", $titulo, $tamplate);
$tamplate = str_replace("[[tabela]]", $tabela, $tamplate);

echo $tamplate;

// $a = array("a" => "apple", "b" => "banana");
// $b = array("a" => "pear", "b" => "strawberry", "c" => "cherry");

// $a += $b; // Union of $a += $b is $a and $b
// echo "Union of \$a += \$b: \n <br>";
// echo "<pre>";
// var_dump($a);
// echo "</pre>";