<?php



# pegar o parameytro uf na url. $_GET capitura parametros na url
$ufParametro = $_GET["uf"];

include('uteis.php');
$template = file_get_contents("template.html", "r");

$arquivo = "arquivos_de_dados/municipio.csv";

$dados = fopen($arquivo, "r");


$tabela = "";
$ufAnterior = "";

while(!feof($dados)){
    $linha = fgets($dados);

    $colunas = explode(";", $linha);

    if(count($colunas) >= 10){

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

        if($tabela==""){
            $tabela.="
            <tr>
                <th>$codigo</th>
                <th>$uf</th>
                <th>$estado</th>
                <th>$pop2000</th>
                <th>$homens</th>
                <th>$mulheres</th>
                <th>$urbana</th>
                <th>$rural</th>
                <th>$pop2010</th>
                <th>$pop2021</th>
            </tr>";
        }else{
       
                $homens_f = number_format($homens,0,",",".");
                $pop2000_f= number_format($pop2000,0,",",".");
                $mulheres_f = number_format($mulheres,0,",",".");
                $rural_f = number_format($rural,0,",",".");
                $urbana_f = number_format($urbana,0,",",".");
                $pop2010_f = number_format($pop2010,0,",",".");
                $pop2021_f = number_format($pop2021,0,",",".");

           
                if($ufParametro==$uf){

          

                if($ufAnterior != $uf){
                    $tabela.="<tr><td colspan='10' class='text-center'><h4>Estado $correcao</h4></td></tr>";
                }

                $tabela.="
                <tr>
                    <td>$codigo</th>
                    <td>$uf</th>
                    <td class='text-center'>$estado</td>
                    <td class='text-end'>$pop2000_f</td>
                    <td class='text-end'>$homens_f</td>
                    <td class='text-end'>$mulheres_f</td>
                    <td class='text-end'>$urbana_f</td>
                    <td class='text-end'>$rural_f</td>
                    <td class='text-end'>$pop2010_f</td>
                    <td class='text-end'>$pop2021_f</td>
                </tr>";

            }
            $ufAnterior = $uf;
        }

    }

}

if($ufParametro == "DF"){
    $titulo = $nomeEstados[$ufParametro];
}else{
$titulo = "Estado  ". $correcao[$ufParametro]."  " . $nomeEstados[$ufParametro];
}


$template = str_replace("[[titulo]]", $titulo, $template);
$template = str_replace("[[tabela]]", $tabela, $template);

echo $template;