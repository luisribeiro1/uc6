<?php

$template = file_get_contents("template.html");

$arquivo = "arquivos_de_dados/municipios.csv";
$dados = fopen($arquivo, "r");

fgets($dados);

$codeParametro = $_GET["codigo"];
$cidade = "";

while(!feof($dados)){

    $linha = fgets($dados);

    $coluna = explode(";", $linha);

    if(count($coluna) >= 10){
        
        $codigo = $coluna[0];
        $uf = $coluna[1];
        $municipio = $coluna[2];
        $pop2000 = $coluna[3];
        $homens = $coluna[4];
        $mulheres = $coluna[5];
        $rural = $coluna[7];
        $urbana = $coluna[6];
        $pop2010 = $coluna[8];
        $pop2021 = $coluna[9];

        $percentualBase = $pop2021 + ($pop2021 * 10 / 100);
        $porc_2000 = $pop2000 / $percentualBase * 100;
        $porc_2010 = $pop2010 / $percentualBase * 100;
        $porc_2021 = $pop2021 / $percentualBase * 100;

        

        $pop2000 = number_format($pop2000,0,"",".");
        $pop2010 = number_format($pop2010,0,"",".");
        $pop2021 = number_format($pop2021,0,"",".");

        if($codeParametro == $codigo){

        # Define os percentuais de população urbana e rural
        $percentualUrbana = $urbana / $pop2010 * 100;
        $percentualRural = $rural / $pop2010 * 100;

        # Define os percentuais de população de homens e mulheres
        $percentualHomens = $homens / $pop2010 * 100;
        $percentualMulheres = $mulheres / $pop2010 * 100;

            $cidade="<div class='col-12 mb-4'>
                <div class='card'>
                    <div class='card-body text-center'>
                        <span class='fw-bold'>$municipio - $uf</span><br>
                        <span class='fs-7'>
                            <i class='bi bi-person-standing text-info'></i> $homens
                            <i class='bi bi-person-standing-dress text-danger'></i> $mulheres
                        </span>
                        <br>
                        <span class='fs-7'>
                            <i class='bi bi-tree-fill text-success'></i> $rural
                            <i class='bi bi-building-fill text-primary'></i> $urbana
                        </span>
                        <br>
                    </div>
                </div>
            </div>";

            $cidade.="
                <h2 class='text-center mb-3'> Evolução populacional </h2>
                <div class='progress col-md-12 mb-3' role='progressbar' style='height: 40px'>
                    <div class='progress-bar bg-success' style='width: $porc_2000%'>$pop2000 em 2000</div>
                </div>
                <div class='progress col-md-12 mb-3' role='progressbar' style='height: 40px'>
                    <div class='progress-bar bg-info text-dark' style='width: $porc_2010%'>$pop2010 em 2010</div>
                </div>
                <div class='progress col-md-12 mb-3' role='progressbar' style='height: 40px'>
                    <div class='progress-bar bg-warning text-dark' style='width: $porc_2021%'>$pop2021 em 2021</div>
                </div>
            ";

            $cidade.="
            <h2 class='text-center mt-3'> Gráfico de setorização populacional </h2>
        <div class='d-flex justify-content-between mt-3'>
            <i class='bi bi-building-fill'></i>
            <i class='bi bi-tree-fill'></i>

        </div>
        <div class='progress-stacked mb-4'>
             <div class='progress' role='progressbar' style='width: $percentualUrbana%'>
                <div class='progress-bar bg-primary'></div>
        </div>

                <div class='progress' role='progressbar' style='width: $percentualRural%'>
            <div class='progress-bar bg-success'></div>
            </div>
        </div>";
        
        $cidade.="
        <div class='d-flex justify-content-between'>
            <i class='bi bi-person-standing'></i>
            <i class='bi bi-person-standing-dress'></i>

        </div>
        <div class='progress-stacked mb-4'>
             <div class='progress' role='progressbar' style='width: $percentualHomens%'>
                <div class='progress-bar bg-info'></div>
        </div>

                <div class='progress' role='progressbar' style='width: $percentualMulheres%'>
            <div class='progress-bar bg-danger'></div>
            </div>
        </div>";
}
}
}

$template = str_replace("[[titulo]]","", $template);
$template = str_replace("[[tabela]]", "", $template);
$template = str_replace("[[conteudo]]","",$template);
$template = str_replace("[[cidade]]", $cidade,$template);

echo $template;
       
