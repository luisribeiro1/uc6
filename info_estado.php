<?php

# Caminho do arquivo
$arquivo = "arquivos_de_dados/estados.csv";

# Função do PHP para leitura de arquivos externos
# r indica que o arquivoserá aberto apenas para leitura
$dados = fopen($arquivo, "r");

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
        
        # Definir o percentuias da população

       
        if($ufParametro==$uf && $uf!='UF'){
           # Definir o percentuias da população

            $percentualBase = $pop2021 + ($pop2021 * 10 / 100);
            $porc_2000 = $pop2000 / $percentualBase * 100;
            $porc_2010 = $pop2010 / $percentualBase * 100;
            $porc_2021 = $pop2021 / $percentualBase * 100;
    
       # echo " $percentualBase | $porc_2000 | $porc_2010 | $porc_2021";

            $info_estado = " 
            <div class ='col-md-12 mb-4'>
            <div class='progress' style='height: 30px' role='progressbar'>
          <div class='progress-bar' style='width: $porc_2000%'>$pop2000</div>
          </div>  
          </div> ";
        }
    
   }
 }

 
