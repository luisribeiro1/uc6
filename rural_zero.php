<?php
$arquivo = 'arquivos_de_dados/municipios.csv';
$dados = fopen($arquivo, 'r');

$rural_zero = [];



while(!feof ($dados)){
    $linhas = fgets($dados);
    $colunas = explode(';', $linhas);

if(count($colunas) >= 3){
    $uf = $colunas[1];
    $estado = $colunas[2];
    $rural = $colunas[7];


    if($rural == 0){
        $rural_zero[$estado] = "$uf - $rural";
    }

}
ksort($rural_zero);
}

foreach($rural_zero as $chave => $valor){
    echo "$chave - $valor <br>";
}
