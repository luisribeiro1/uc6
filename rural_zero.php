<?php

$rural_zero = [];
$arquivo = "arquivos_de_dados/municipios.csv";

$dados = fopen($arquivo,"r");




while(!feof($dados)) {

    $linha = fgets ($dados);
    $colunas = explode(";", $linha);
    ksort($rural_zero);

    if(count($colunas) >= 3) {
        $uf =  $colunas[1];
        $nomeEstado = $colunas[2];
        $rural = $colunas[7];
       
       
    }
    if($rural == 0){
        $rural_zero[$nomeEstado] = "$uf - $rural";  
    }    
    
}

foreach($rural_zero as $chave => $valor){
    echo "•$chave: $valor <br>";
}
