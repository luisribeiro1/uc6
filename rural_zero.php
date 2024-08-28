<?php
// Cria um array associativo vazio
$rural_zero = [];

$arquivo = "arquivo_de_dados/municipios.csv";

// Abre o arquivo CSV
if (($handle = fopen("municipios.csv", "r")) ) {
    // Lê o cabeçalho do CSV (presumindo que existe um cabeçalho)
    $header = fgetcsv($handle);

    // Lê as linhas do CSV
    while (($data = fgetcsv($handle)) ) {
        // Presumindo que as colunas estão na ordem: cidade, uf, populacao_rural
        $cidade = $data[0];
        $uf = $data[1];
        $populacao_rural = $data[2];

        // Verifica se a população rural é igual a zero
        if ($populacao_rural == 0) {
            // Adiciona a cidade e uf ao array
            $rural_zero[$cidade] = $uf;
        }
    }
    // Fecha o arquivo CSV
    fclose($handle);
}

// Ordena o array pelo valor (uf)
asort($rural_zero);

// Itera sobre o array e exibe os dados
foreach ($rural_zero as $cidade => $uf) {
    echo "Cidade: $cidade, UF: $uf\n";
}

