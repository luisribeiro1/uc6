<?php


# Caminho do arquivo
$arquivo = "arquivos_de_dados/estados.csv";

# Função do PHP para leitura de arquivos externos
# r indica que o arquivoserá aberto apenas para leitura
$dados = fopen($arquivo, "r");

// vai ignorar a linha 0 do array
fgets($dados);

$infoEstado = "";

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

    
    
    if($ufParametro==$uf && $uf!='UF'){

        # Incluir as primeiras informações do estado
        $infoEstado = "<p>
        Gentílico: <b>$gentilico</b> |
        Capital: <b>$capital</b> |
        Número de Municípios: <b>$quantidade_cidades</b>
        ";

        # Definir os percentuais da população
        $percentualBase = $pop2021 * 1.1;
        $porc_2000 = $pop2000 / $percentualBase * 100;
        $porc_2010 = $pop2010 / $percentualBase * 100;
        $porc_2021 = $pop2021 / $percentualBase * 100;

        # Define os percentuais de População Urbana e Rural

        $percentualUrbana = $urbana / $pop2010 * 100;
        $percentualRural = $rural / $pop2010 * 100;

        # Define os percentuais de População de Homens e de Mulheres

        $percentualHomens = $homens / $pop2010 * 100;
        $percentualMulheres = $mulheres / $pop2010 * 100;

        # Formatando os numeros

        $pop2000 = number_format($pop2000,0,"",".");
        $pop2010 = number_format($pop2010,0,"",".");
        $pop2021 = number_format($pop2021,0,"",".");

        // echo "$percentualBase |$porc_2000 | $porc_2010 | $porc_2021";
        $infoEstado .= "
            
            <div class='col-md-12 mb-4'>
                <div class='progress mb-2' style='height: 30px' role='progressbar'>
                    <div class='progress-bar' style='width: $porc_2000%'>$pop2000 em 2000</div>
                </div>
                <div class='progress mb-2' style='height: 30px' role='progressbar'>
                    <div class='progress-bar' style='width: $porc_2010%'>$pop2010 em 2010</div>
                </div>
                <div class='progress mb-2' style='height: 30px' role='progressbar'>
                    <div class='progress-bar' style='width: $porc_2021%'>$pop2021 em 2021</div>
                </div>
            </div>";


            
            $infoEstado .= "
                <div class='d-flex justify-content-between'>
                    <i class='bi bi-building-fill'></i>
                    <i class='bi bi-tree-fill'></i>
                </div>
                <div class='progress-stacked mb-4'>
  
                    <div class='progress' role='progressbar' style= 'width: $percentualUrbana%'>
                        <div class='progress-bar bg-info'></div>
                    </div>
  
                    <div class='progress' role='progressbar' style='width: $percentualRural%'>
                        <div class='progress-bar bg-success'></div>
                    </div>

                </div>
            ";
            $infoEstado .= "
                <div class='d-flex justify-content-between'>
                    <i class='bi bi-person-standing text-info'></i>
                    <i class='bi bi-person-standing-dress text-danger'></i>
                </div>
                <div class='progress-stacked mb-4'>
  
                    <div class='progress' role='progressbar' style= 'width: $percentualHomens%'>
                        <div class='progress-bar'></div>
                    </div>
  
                    <div class='progress' role='progressbar' style='width: $percentualMulheres%'>
                        <div class='progress-bar bg-danger'></div>
                    </div>

                </div>
            ";
    }
    
}
}
