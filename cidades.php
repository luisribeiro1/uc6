<?php

$codigoParametro = $_GET["codigo"];

$template = file_get_contents('template.html');

$arquivo = 'arquivos_de_dados/municipios.csv';
$dados = fopen($arquivo, 'r');

$titulo = "";

$info_cidade = "";

while(!feof($dados)){
    $linhas = fgets($dados);
    $colunas = explode(";", $linhas);

    if(count($colunas) >= 10 ){
        $codigo = $colunas[0];
        $uf = $colunas[1];
        $estado = $colunas[2];
        $pop2000 = $colunas[3];
        $homens = $colunas[4];
        $mulheres = $colunas[5];
        $urbana = $colunas[6];
        $rural = $colunas[7];
        $pop2010 = $colunas[8];
        $pop2021 = $colunas[9];
        
    
    if($codigoParametro == $codigo){

        $percentual_base = $pop2021 + ($pop2021 * 10 / 100);
        $perc_2000 = $pop2000 * $percentual_base;
        $perc_2010 = $pop2010 * $percentual_base;
        $perc_2021 = $pop2021 * $percentual_base;
    
        $percentualUrbana = $urbana / $pop2010 * 100;
        $percentualRural = $rural / $pop2010 * 100;

        $percentualHomens = $homens / $pop2010 * 100;
        $percentualMulheres = $mulheres / $pop2010 * 100;

        $pop2000 = number_format($pop2000, 0, "", ".");
        $pop2010 = number_format($pop2010, 0, "", ".");
        $pop2021 = number_format($pop2021, 0, "", ".");
        

        $titulo = "<h1 class='text-center'>$estado<h1>";

        $info_cidade.="
       
        <div class='col-md-12 mb-2'>   
            <div class='progress' style='height: 27px' role='progressbar'>
                <div class='progress-bar' style='width: $perc_2000%'>$pop2000 Em 2000</div>
            </div>
        </div>
        
        <div class='col-md-12 mb-2'>   
            <div class='progress' style='height: 27px' role='progressbar'>
                <div class='progress-bar' style='width: $perc_2010%'>$pop2010 Em 2010</div>
            </div>
        </div>
        
        <div class='col-md-12 mb-2'>   
            <div class='progress' style='height: 27px' role='progressbar'>
                <div class='progress-bar' style='width: $perc_2021%'>$pop2021 Em 2021</div>
            </div>
        </div>
        ";

        $info_cidade.="
        <div class='d-flex justify-content-between'>
            <i class='bi bi-building-fill'></i>
            <i class='bi bi-tree-fill'></i> 
        </div>
        <div class='progress-stacked mb-4 bg-primary-subtle'>
            <div class='progress' role='progressbar' style='width: $percentualUrbana%'>
                <div class='progress-bar bg-info'>$percentualUrbana%</div>
            </div>
            <div class='progress' role='progressbar' style='width: $percentualRural%'>
                <div class='progress-bar bg-success'>$percentualRural%</div>
            </div>
        <   /div>
    ";

    $info_cidade.="
    <div class='d-flex justify-content-between'>
         <i class='bi bi-person-standing'></i>
         <i class='bi bi-person-standing-dress'></i> 
     </div>
 <div class='progress-stacked mb-4 bg-primary-subtle'>
     <div class='progress' role='progressbar' style='width: $percentualHomens%'>
         <div class='progress-bar bg-info'>$percentualHomens%</div>
     </div>
     <div class='progress' role='progressbar' style='width: $percentualMulheres%'>
         <div class='progress-bar bg-success'>$percentualMulheres%</div>
     </div>
 </div>
 ";
        
    }
    
    }
}


$template = str_replace("[[titulo]]" , $titulo, $template);
$template = str_replace("[[conteudo]]", $info_cidade, $template);
$template = str_replace("[[tabela]]", "", $template);
echo $template;
