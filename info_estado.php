<?php
# Caminho do arquivo
$arquivo = "arquivos_de_dados/estados.csv";

# Função PHP para leirtura de arquivos externos
# r indica que o arquivo será aberto apenas para a leitura.
$dados = fopen($arquivo,"r");

$info_estado = "";

# Percorrer dados, até que encontre o final do arquivo
while(!feof($dados)){

    # Pegar a linha atual
    $linha = fgets($dados);
    # Dividir a linha atual e gerer um array, usando o ; como referência
    $colunas = explode(";",$linha);

    # Verificar se existe todos os itens no array
    if(count($colunas) >= 13){

        $uf = $colunas[0];
        $nomeEstado = $colunas[1];
        $pop2000 = (int)$colunas[2];
        $homens = $colunas[3];
        $mulheres = $colunas[4];
        $urbana = $colunas[5];
        $rural = $colunas[6];
        $pop2010 = (int)$colunas[7];
        $pop2021 = (int)$colunas[8];
        $quantidade_cidades = $colunas[9];
        $capital = $colunas[10];
        $gentilico = $colunas[11];
        $area = $colunas[12];

        if($ufParametro == $uf && $uf != 'UF'){

            # Incluir as primeiras infromações do estado
            $info_estado = "<p>
            Gentílico: <strong>$gentilico</strong> |
            Capital: <strong>$capital</strong> |
            Números de Municípios: <strong>$quantidade_cidades</strong>
            </p>";

            # Definir os percentuais da população:
            $percentualBase = $pop2021 + ($pop2021 * 10 / 100);
            $porc_2000 = $pop2000 / $percentualBase * 100;
            $porc_2010 = $pop2010 / $percentualBase * 100;
            $porc_2021 = $pop2021 / $percentualBase * 100;

            # Definie os percentuais de população urbana e rural
            $percentualUrbana = $urbana / $pop2010 * 100;
            $percentualRural = $rural / $pop2010 * 100;

            # Percentual de Homens e Mulheres
            $percentualHomens = $homens / $pop2010 * 100;
            $percentualMulheres = $mulheres / $pop2010 * 100;

            # Formatação dos valores.
            $pop2000 = number_format($pop2000,0,"",".");
            $pop2010 = number_format($pop2010,0,"",".");
            $pop2021 = number_format($pop2021,0,"",".");
            
            // echo "$percentualBase | $porc_2000 | $porc_2010 | $porc_2021";

            $info_estado .= "
            <div class='col-md-12 mb-4'>
                <div class='progress mb-2' style='height: 30px' role='progressbar'>
                    <div class='progress-bar bg-secondary' style='width: $porc_2000%'>$pop2000 em 2000</div>
                </div>
                <div class='progress mb-2' style='height: 30px' role='progressbar'>
                    <div class='progress-bar bg-secondary' style='width: $porc_2010%'>$pop2010 em 2010</div>
                </div>
                <div class='progress mb-2' style='height: 30px' role='progressbar'>
                    <div class='progress-bar bg-secondary' style='width: $porc_2021%'>$pop2021 em 2021</div>
                </div>
            </div>";

            $info_estado .= "
            <div class='d-flex justify-content-between'>
                <i class='bi bi-building-fill text-primary'></i>
                <i class='bi bi-tree-fill text-success'></i>
            </div>
            <div class='col-md-12 mb-4'>
                <div class='progress-stacked mb-2'>
                    <div class='progress' role='progressbar' style='width: $percentualUrbana%'>
                        <div class='progress-bar'></div>
                    </div>
                    <div class='progress mb-2' role='progressbar' style='width: $percentualRural%'>
                        <div class='progress-bar bg-success'></div>
                    </div>
                </div>
            </div>
            ";
            
            $info_estado .= "
            <div class='d-flex justify-content-between'>
              <i class='bi bi-person-standing text-info'></i>
              <i class='bi bi-person-standing-dress text-danger'></i>
            </div>
            <div class='col-md-12 mb-4'>
                <div class='progress-stacked mb-2'>
                    <div class='progress' role='progressbar' style='width: $percentualHomens%'>
                        <div class='progress-bar bg-info'></div>
                    </div>
                    <div class='progress mb-2' role='progressbar' style='width: $percentualMulheres%'>
                        <div class='progress-bar bg-danger'></div>
                    </div>
                </div>
            </div>
            ";
        }
        
    }
}  