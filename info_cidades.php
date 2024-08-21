<?php

$arquivo = "arquivos_de_dados/municipios.csv";

$dados = fopen($arquivo, "r");

$info_cidades="";

while(!feof($dados)){

    $linha = fgets($dados);

    $colunas = explode(";", $linha);

    if(count($colunas) >= 10){

        $codigo = $colunas[0];
        $uf = $colunas[1];
        $municipios = $colunas[2];
        $pop2000 = $colunas[3];
        $homens = $colunas[4];
        $mulheres = $colunas[5];
        $urbana = $colunas[6];
        $rural = $colunas[7];
        $pop2010 = $colunas[8];
        $pop2021 = $colunas[9];
    
    if($cidadeParametro==$municipios && $ufParametro == $uf && $uf!='uf'){

       

        $percentualBase = $pop2021 + ($pop2021 *10 / 100);
        $porc_2000 = $pop2000 / $percentualBase *100;
        $porc_2010 = $pop2010 / $percentualBase * 100;
        $porc_2021 = $pop2021 / $percentualBase * 100;

        $percentualUrbana = $urbana / $pop2010 * 100;
        $percentualRural = $rural / $pop2010 * 100;

        $percentualHomens = $homens / $pop2010 * 100;
        $percentualMulheres = $mulheres / $pop2010 * 100;

        $pop2000 = number_format($pop2000,0,"",".");
        $pop2010 = number_format($pop2010,0,"",".");
        $pop2021 = number_format($pop2021,0,"",".");

        $info_cidades = "<h1>
        Cidade de: $municipios";

        $info_cidades .=" <div class='col-md-12 mb-4'>
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

    $info_cidades.="
    <div class='d-flex justify-content-between'>
        <i class='bi bi-building-fill text-primary'></i>
        <i class='bi bi-tree-fill text-success'></i>
    </div>
    <div class='col-md-12 mb-4'>
    <div class='progress-stacked mb-4'>
        <div class='progress' role='progressbar' style='width: $percentualUrbana%'>
            <div class='progress-bar'></div>
        </div>
  
   <div class='progress' role='progressbar'  style='width: $percentualRural%'>
            <div class='progress-bar bg-success text-success'></div>
        </div>
    </div>
    </div>
    ";

    $info_cidades.="
    <div class='d-flex justify-content-between'>
        <i class='bi bi-person-standing text-info'></i>
        <i class='bi bi-person-standing-dress text-danger'></i>
    </div>
    <div class='col-md-12 mb-4'>
    <div class='progress-stacked mb-2'>
        <div class='progress' role='progressbar' style='width: $percentualHomens%'>
            <div class='progress-bar bg-info'></div>
        </div>
  
   <div class='progress' role='progressbar'  style='width: $percentualMulheres%'>
            <div class='progress-bar bg-danger'></div>
        </div>
    </div>
    </div>
    ";
    }

    }
}