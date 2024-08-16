<?php

$arquivo = "Arquivo_de_dados/Estado.csv";

$dados = fopen($arquivo, "r");

// vai ignorar a linha 0 do array
fgets($dados);

$info_estado = "";

# Percorrer dados até encontrar o final do arquivo
while(!feof($dados)){
    
    # Pegar a linha atual
    $linha = fgets($dados);
    
    # dividir a linha atual e gerar um array, usando o ";" como referência.
    $coluna = explode(";", $linha);
    
    # verificar se existem todos os itens no array
    if(count($coluna) >= 13){

        $uf = $coluna[0];       
        $nomeEstado = $coluna[1];
        $pop2000 = $coluna[2];
        $homens = $coluna[3];
        $mulheres = $coluna[4];
        $urbana = $coluna[5];
        $rural = $coluna[6];
        $pop2010 = $coluna[7];
        $pop2021 = $coluna[8];
        $quantidade_cidades = $coluna[9];
        $capital = $coluna[10];
        $gentilico = $coluna[11];
        $area = $coluna[12];

        # Definir os percentuais da população
        $percentualBase = $pop2021 + ($pop2021 * 10 / 100);
        $porc_2000 = $pop2000 / $percentualBase * 100;
        $porc_2010 = $pop2010 / $percentualBase * 100;
        $porc_2021 = $pop2021 / $percentualBase * 100;
        
        if($ufParametro==$uf && $uf!='UF'){

            echo " $percentualBase |$porc_2000 | $porc_2010 | $porc_2021";

            $info_estado = "
            <div class='col-md-12' mb-4>
                <div class='progress' role='progressbar'>
                    <div class='progress-bar' style='width: $porc_2000%'>$porc_2000%</div>
                </div>  
            </div>";
        }
    }
}
