<?php
$codigoParametro = $_GET["codigo"];


$template = file_get_contents("template.html");

$arquivo = "arquivos_de_dados/municipios.csv";

$dados = fopen($arquivo, "r");

$titulo="";

$info_estado = "";
while(!feof($dados)) {

    $linha = fgets($dados);

    $colunas = explode(";", $linha);

    if (count($colunas) >= 10) {

        
        $codigo = $colunas[0];
        $uf = $colunas [1];
        $nomeEstado = $colunas[2];
        $pop2000 = $colunas[3];
        $homens = $colunas[4];
        $mulheres = $colunas[5];
        $urbana = $colunas[6];
        $rural = $colunas[7];
        $pop2010 = $colunas[8];
        $pop2021 = $colunas[9];
         
        
        if($codigoParametro == $codigo){
            
            
            

          
            $percentualBase = $pop2021 + ($pop2021 * 10 / 100);
            $porc_2000 = $pop2000 / $percentualBase * 100;
            $porc_2010 = $pop2010 / $percentualBase * 100;
            $porc_2021 = $pop2021 / $percentualBase * 100;

           
            $percentualUrbana = $urbana / $pop2010 * 100;   
            $percentualRural = $rural / $pop2010 * 100; 

           
            $percentualHomens= $homens / $pop2010 * 100;   
            $percentualMulheres = $mulheres / $pop2010 * 100; 
            

            $pop2000 = number_format($pop2000,0,"",".");
            $pop2010 = number_format($pop2010,0,"",".");
            $pop2021 = number_format($pop2021,0,"",".");
            
            $titulo.="
                <h1 class='text-center'> $nomeEstado</h1>
                    ";

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
                    <div class='progress-bar bg-warning'>$percentualRural</div>
                </div>
                <div class='progress' role='progressbar' style='width: $percentualRural%'>
                    <div class='progress-bar bg-success'>$percentualRural</div>
                </div>
            </div>

            <div class='d-flex justify-content-between'>
                <i class='bi bi-person-standing'></i>
                <i class='bi bi-person-standing-dress'></i>
            </div>
            <div class='progress-stacked mb-3 ' >
                <div class='progress' role='progressbar' style='width: $percentualHomens%'>
                    <div class='progress-bar bg-primary'>$percentualHomens</div>
                </div>
                <div class='progress' role='progressbar' style='width: $percentualMulheres%'>
                    <div class='progress-bar bg-danger'>$percentualMulheres</div>
                </div>
            </div>";
            
            
        }

    }
    
}



$template = str_replace("[[titulo]]", $titulo, $template);
$template = str_replace("[[conteudo]]", $info_estado, $template);
$template = str_replace("[[tabela]]", " ", $template);


echo $template;
    