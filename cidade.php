<?php

$codigoParametro = $_GET["codigo"];

$template = file_get_contents("template.html");

$arquivo = "arquivos_de_dados/municipios.csv";

$dados = fopen($arquivo, "r");

$info_cidade = "";

$titulo = "";

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

        if ($codigoParametro == $codigo) {

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
            
            $titulo = "<tr><td colspan='10'> Dados da Cidade de $nomeEstado </td></tr>";

            $info_cidade.= "
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
            $info_cidade.="
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
            $info_cidade.="
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
}

$template = str_replace("[[titulo]]", $titulo, $template);
$template = str_replace("[[conteudo]]", $info_cidade, $template);
$template = str_replace("[[tabela]]", " ", $template);


echo $template;