<?php
 

$template = file_get_contents("template.html");

$arquivo = "arquivos_de_dados/municipios.csv";

$dados = fopen($arquivo, "r");

$tabela = "";


while(!feof($dados)) {

    $linha = fgets ($dados);

    $colunas = explode(";", $linha);

    if(count($colunas) >= 10) {

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
        
        
    

        if ($tabela == "") {
            $tabela.="
            <tr> 
                <th>$codigo</th>
                <th>$uf</th>
                <th>$nomeEstado</th>
                <th>$pop2000</th>
                <th>$homens</th>
                <th>$mulheres</th>
                <th>$urbana</th>
                <th>$rural</th>
                <th>$pop2010</th>
                <th>$pop2021</th>
            </tr>
            ";
        }else{
            #formatar com 0 casas Decimais
            $pop2000_f = number_format($pop2000,0,"",".");
            $homens_f = number_format($homens,0,"",".");
            $mulheres_f = number_format($mulheres,0,"",".");
            $rural_f = number_format($rural,0,"",".");
            $urbana_f = number_format($urbana,0,"",".");
            $pop2021_f = number_format($pop2021,0,"",".");
        

            $tabela.= "
            <tr>
                <td>$codigo</td>
                <td>$uf</td>
                <td>$nomeEstado</td>
                <td>$pop2000</td>
                <td>$homens_f</td>
                <td>$mulheres_f</td>
                <td>$urbana_f</td>
                <td>$rural_f</td>
                <td>$pop2010</td>
                <td>$pop2021_f</td>
            </tr>
            ";


        }
    }

}


$titulo = "Dados dos Municipios";
#Localizar a marcação [[titulo]] e substituir pelo conteúdo da variável $titulo.
$template = str_replace("[[titulo]]", $titulo, $template);
$template = str_replace("[[tabela]]", $tabela, $template);


echo $template;


