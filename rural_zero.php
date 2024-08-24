<?php

# Caminho do arquivo
$arquivo = "Arquivo_de_dados/municipios.csv";

# Função do PHP para leitura de arquivos externos
# r indica que o arquivoserá aberto apenas para leitura
$dados = fopen($arquivo, "r");

$rural_zero = [];

while(!feof($dados)){
    
    # Pegar a linha atual
    $linha = fgets($dados);
    
    # dividir a linha atual e gerar um array, usando o ";" como referência.
    $coluna = explode(";", $linha);
    


        if($rural == 0){
            $rural_zero[$municipio] = $uf;
        }
    }}

    asort($rural_zero);

    foreach($rural_zero as $municipio => $uf){
        echo "• $municipio: $uf <br>";
    }