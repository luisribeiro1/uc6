<?php   


$arquivo = "arquivos_de_dados/estados.csv";

$dados = fopen($arquivo, "r");

$info_estado = "";

while(!feof($dados)) {

    $linha = fgets($dados);

    $colunas = explode(";", $linha);

    if (count($colunas) >= 13) {

        $uf = $colunas [0];
        $nomeEstado = $colunas[1];
        $pop2000 = (int)$colunas[2];
        $homens = $colunas[3];
        $mulheres = $colunas[4];
        $urbana = $colunas[5];
        $rural = $colunas[6];
        $pop2010 = (int)$colunas[7];
        $pop2021 = (int)$colunas[8];
        $cidades = $colunas[9];
        $quantidade_cidades = $colunas[10];
        $capital = $colunas[11];
        $gentilico = $colunas[12]; 

        
        if($ufParametro == $uf && $uf!='UF'){
            
            #incluir as primeiras informações do estado
            $info_estado = "<p>
            Gentílico: <strong> $gentilico </strong> |
            Capital: <strong> $capital </strong> |
            Número de municípios: <strong> $quantidade_cidades </strong> 
            </p>";


            # definir os percentuais da população
            $percentualBase = $pop2021 + ($pop2021 * 10 / 100);
            $porc_2000 = $pop2000 / $percentualBase * 100;
            $porc_2010 = $pop2010 / $percentualBase * 100;
            $porc_2021 = $pop2021 / $percentualBase * 100;

            # Definir os percentuais de população urbama e rural
            $percentualUrbana = $urbana / $pop2010 * 100;   
            $percentualRural = $rural / $pop2010 * 100; 

            # Definir os percentuais da população de homens e mulheres 
            $percentualHomens= $homens / $pop2010 * 100;   
            $percentualMulheres = $mulheres / $pop2010 * 100; 
            

            $pop2000 = number_format($pop2000,0,"",".");
            $pop2010 = number_format($pop2010,0,"",".");
            $pop2021 = number_format($pop2021,0,"",".");
            


            $info_estado.= "
            <div class='col-md-12 mb-3 '  >
                <div class='progress  mb-2 ' role='progressbar' style='height:35px' >
                    <div class='progress-bar' style='width: $porc_2000%'>$pop2000 em 2000</div>
                </div>
                <div class='progress  mb-2  ' role='progressbar' style=' height: 35px' >
                    <div class='progress-bar' style='width: $porc_2010%'>$pop2010 em 2010</div>
                </div>
                <div class='progress  mb-2      ' role='progressbar' style=' height: 35px'>
                    <div class='progress-bar' style='width: $porc_2021%'>$pop2021 em 2021</div>
                </div>
            </div>";



            $info_estado.= "
            <div class='d-flex justify-content-between'>
                <i class='bi bi-building-fill'></i>
                <i class='bi bi-tree-fill'></i>
            </div>
            <div class='progress-stacked mb-3 ' >
                <div class='progress' role='progressbar' style='width: $percentualUrbana%'>
                    <div class='progress-bar bg-warning'></div>
                </div>
                <div class='progress' role='progressbar' style='width: $percentualRural%'>
                    <div class='progress-bar bg-success'></div>
                </div>
            </div>

            <div class='d-flex justify-content-between'>
                <i class='bi bi-person-standing'></i>
                <i class='bi bi-person-standing-dress'></i>
            </div>
            <div class='progress-stacked mb-3 ' >
                <div class='progress' role='progressbar' style='width: $percentualHomens%'>
                    <div class='progress-bar bg-primary'></div>
                </div>
                <div class='progress' role='progressbar' style='width: $percentualMulheres%'>
                    <div class='progress-bar bg-danger'></div>
                </div>
            </div>";
            
        }

    }
}
    