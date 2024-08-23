<?php

$arquivo = "arquivos_de_dados/municipios.csv";

$dados = fopen($arquivo, "r");

$rural_zero = [];

while(!feof($dados)) {

    $linha = fgets($dados);

    $coluna = explode(";",$linha);

    if(count($coluna) >=9){

        $codigo = $coluna[0];
        $uf = $coluna[1];
        $municipio = $coluna[2];
        $pop2000 = $coluna[3];
        $homens = $coluna[4];
        $mulheres = $coluna[5];
        $rural = $coluna[7];
        $urbana = $coluna[6];
        $pop2021 = $coluna[9];

        if($rural ==0){
            $rural_zero[$municipio] = $uf;
        }

    }
}

asort($rural_zero);

foreach($rural_zero as $municipio => $uf){
    echo "•$municipio:$uf <br>";
}

