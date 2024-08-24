<?php

$rural_zero = [];

$arquivo = "arquivos_de_dados/municipios.csv";

$dados = fopen($arquivo, "r");

while (!feof($dados)) {
  $linha = fgets($dados);

  $colunas = explode(";", $linha);

  if (count($colunas) >= 10) {

    $codigo = $colunas[0];
    $uf = $colunas[1];
    $cidade = $colunas[2];
    $pop2000 = $colunas[3];
    $homens = $colunas[4];
    $mulheres = $colunas[5];
    $urbana = $colunas[6];
    $rural = $colunas[7];
    $pop2010 = $colunas[8];
    $pop2021 = $colunas[9];

    if ($rural == 0) {
      $rural_zero[$cidade] = "$uf - $rural";
    }
  }

  ksort($rural_zero);
}

foreach ($rural_zero as $chave => $valor) {
  echo "• $valor: $chave <br>";
}
