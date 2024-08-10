<?php

$template = file_get_contents("template.html");

$arquivo = "arquivos_de_dados/municipios.csv";

$dados = fopen($arquivo, "r");

$tabela = "";

while(!feof($dados)) {
    $linha = fgets($dados);
    $colunas = explode(";", $linha);

    if (count($colunas) >= 10) {

        $codigo = $colunas [0];
        $uf = $colunas[1];
        $municipio = $colunas[2];
        $pop2000 = $colunas[3];
        $homens = $colunas[4];
        $mulheres = $colunas[5];
        $urbana = $colunas[6];
        $rural = $colunas[7];
        $pop2010 = $colunas[8];
        $pop2021 = $colunas[9];
        
        if ($tabela == "") {
            $tabela.="
            <tr>
                <th>$codigo</th>
                <th>$uf</th>
                <th>$municipio</th>
                <th>$urbana</th>
                <th>$rural</th>
                <th>$homens</th>
                <th>$mulheres</th> 
                <th>$pop2000</th>
                <th>$pop2010</th>
                <th>$pop2021</th>
            </tr>
            ";
        }else{
            $homens_f = number_format($homens,0,"",".");
            $mulheres_f = number_format($mulheres,0,"",".");
            $pop2000_f = number_format($pop2000,0,"",".");
            $pop2010_f = number_format($pop2010,0,"",".");
            $pop2021_f = number_format($pop2021,0,"",".");
            $rural_f = number_format($rural,0,"",".");
            $urbana_f = number_format($urbana,0,"",".");

            //if ($mulheres > $homens)
            
            $tabela.="
            <tr>
                <td>$codigo</td>
                <td>$uf</td>
                <td>$municipio</td>
                <td>$urbana</td>
                <td>$rural</td>
                <td>$homens_f</td>
                <td>$mulheres_f</td>
                <td>$pop2000_f</td>
                <td>$pop2010_f</td>
                <td>$pop2021_f</td>  
            </tr>
            ";
        }    
    }
}

$titulo = "Dados Populacionais dos Municípios brasileiros.";

$template = str_replace("[[titulo]]", $titulo, $template);
$template = str_replace("[[tabela]]", $tabela, $template);

echo $template;