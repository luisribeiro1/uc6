<?php

$arquivo = "arquivos_de_dados/estados.csv";

$dados = fopen($arquivo, "r");

$ufParametro = $_GET["uf"];

$info_estado = "";

while(!feof($dados)) {
    $linha = fgets($dados);

    $colunas = explode(";", $linha);

    if (count($colunas) >= 13) {

        $uf = $colunas [0];
        $nomeEstado = $colunas[1];
        $pop2000 = $colunas[2];
        $homens = $colunas[3];
        $mulheres = $colunas[4];
        $urbana = $colunas[5];
        $rural = $colunas[6];
        $pop2010 = $colunas[7];
        $pop2021 = $colunas[8];
        $cidades = $colunas[9];
        $capital = $colunas[10];
        $gentilico = $colunas[11];
        $area = $colunas[12];

        if ($ufParametro == $uf && $uf != 'UF') {
            # Incluir as infos. do estado.
            $info_estado = "<p>
            Gentílico: <strong>$gentilico</strong> |
            Capital: <strong>$capital</strong> |
            Municípios: <strong>$cidades</strong>
            </p>";

            # Definir o percentual da população.
            $percentBase = $pop2021 + ($pop2021 * 10 / 100);
            $percent_2000 = $pop2000 / $percentBase * 100;
            $percent_2010 = $pop2010 / $percentBase * 100;
            $percent_2021 = $pop2021 / $percentBase * 100;

            # Define os percentuais de população urbana e rural.
            $percentUrban = $urbana / $pop2010 * 100;
            $percentRural = $rural / $pop2010 * 100;

            # Define os percentuais de homens e mulheres.
            $percentHomens = $homens / $pop2010 * 100;
            $percentMulheres = $mulheres / $pop2010 * 100;

            # Formatação de número.
            $pop2000 = number_format($pop2000,0,"",".");
            $pop2010 = number_format($pop2010,0,"",".");
            $pop2021 = number_format($pop2021,0,"",".");

            # echo "$percentBase | $percent_2000 | $percent_2010 | $percent_2021";
            
            $info_estado.= "
            <div class = 'col-md-12 mb-4'>
                <div class='progress mb-2' style='height: 30px;' role='progressbar'>
                    <div class='progress-bar' style='width: $percent_2000%'>$pop2000 em 2000</div>
                </div>
                <div class='progress mb-2' style='height: 30px;' role='progressbar'>
                    <div class='progress-bar' style='width: $percent_2010%'>$pop2010 em 2010</div>
                </div>
                <div class='progress mb-2' style='height: 30px;' role='progressbar'>
                    <div class='progress-bar' style='width: $percent_2021%'>$pop2021 em 2021</div>
                </div>
            </div>";

            # População urbana e rural.
            $info_estado.="
            <div class='d-flex justify-content-between'>
                <i class='bi bi-building-fill'></i>
                <i class='bi bi-tree-fill'></i>
            </div>
            <div class='progress-stacked mb-4'>
                <div class='progress' role='progressbar' style='width: $percentUrban%'>
                    <div class='progress-bar bg-info'></div>
                </div>
                <div class='progress' role='progressbar' style='width: $percentRural%'>
                    <div class='progress-bar bg-success'></div>
                </div>
            </div>";
            
            # Homens e mulheres.
            $info_estado.="
            <div class='d-flex justify-content-between'>
                <i class='bi bi-person-standing'></i>
                <i class='bi bi-person-standing-dress'></i>
            </div>
            <div class='progress-stacked mb-4'>
                <div class='progress' role='progressbar' style='width: $percentHomens%'>
                    <div class='progress-bar bg-primary-emphasis'></div>
                </div>
                <div class='progress' role='progressbar' style='width: $percentMulheres%'>
                    <div class='progress-bar bg-danger'></div>
                </div>
            </div>";
        }
    }    
};