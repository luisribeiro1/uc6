<?php

# Caminho do arquivo
$arquivo = "arquivos_de_dados/municipios.csv";

# Função do PHP para leitura de arquivos externos
# r indica que o arquivoserá aberto apenas para leitura
$dados = fopen($arquivo, "r");

# Criar um array vazio
$rural_zero = [];

while(!feof($dados)) {
    
    # Pegar a linha atual
    $linha = fgets($dados);

    # dividir a linha atual e gerar um array, usando o ";" como referência.
    $coluna = explode(";", $linha);

    # verificar se existem todos os itens no array
    if(count($coluna) >= 9){
        
        $codigo = $coluna[0];
        $uf = $coluna[1];
        $municipio = $coluna[2];
        $pop2000 = $coluna[3];
        $homens = $coluna[4];
        $mulheres = $coluna[5];
        $urbana = $coluna[6];
        $rural = $coluna[7];
        $pop2010 = $coluna[8];
        $pop2021 = $coluna[9];
        

        if($rural == 0){
            $rural_zero[$municipio] = "$uf - $rural"; 
        }
}}

asort($rural_zero);

foreach($rural_zero as $municipio => $uf){
     echo "•$municipio:$uf<br>";
     }
