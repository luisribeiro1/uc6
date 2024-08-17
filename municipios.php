<?php

include('uteis.php');

# Pegar o parâmetro uf na url. $_GET captura parâmetros na url.

$ufParametro = $_GET["uf"];

include('info_estado.php');

$template = file_get_contents("template.html");

$arquivo = "arquivos_de_dados/municipios.csv";

$dados = fopen($arquivo, "r");

$tabela = "";

$ufAnterior ="";

while(!feof($dados)){

    $linha = fgets ($dados);

    $colunas = explode (";",$linha);

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

    if($tabela== ""){
        $tabela.="
        <tr class='table table-primary'>
        <th>$codigo</th>
        <th>$uf</th>
        <th>$municipios</th>
        <th>$homens</th>
        <th>$mulheres</th>
        <th>$urbana</th>
        <th>$rural</th>
        <th>$pop2010</th>
        <th>$pop2021</th>
        </tr>
        ";
    }else{
        
        $homens_f = number_format($homens,0,"",".");
        $mulheres_f = number_format($mulheres,0,"",".");
        $urbana_f = number_format($urbana,0,"",".");
        $rural_f = number_format($rural,0,"",".");
        $pop2010_f = number_format($pop2010,0,"",".");
        $pop2021_f = number_format($pop2021,0,"",".");

         if($ufParametro==$uf){
        //     if($ufAnterior != $uf){
        //         $tabela.="<tr><td colspan='9'><b>Municipios de $uf</b></td></tr>";
        // }

    
        $tabela.="
        <tr>
        <td>$codigo</td>
        <td>$uf</td>
        <td>$municipios</td>
        <td>$homens_f</td>
        <td>$mulheres_f</td>
        <td>$urbana_f</td>
        <td>$rural_f</td>
        <td>$pop2010_f</td>
        <td>$pop2021_f</td>
        </tr>
        ";
        
        $ufAnterior = $uf;  

    }
      
    
    }

    }
}

if($ufParametro == "DF"){
     $titulo = "Distrito da República";
}else{
    $titulo = "Estado".$reposicao[$ufParametro].$nomesEstados[$ufParametro];
};


$template = str_replace("[[titulo]]", $titulo, $template);
$template = str_replace("[[conteudo]]", $info_estado, $template);
$template = str_replace("[[tabela]]", $tabela, $template);

echo $template;

