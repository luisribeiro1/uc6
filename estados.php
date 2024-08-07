<?php

# Carregaro arquivo do tamplate
$tamplate = file_get_contents("tamplate.html","r");

# Caminho do arquivo
$arquivo = "arquivos_de_dados/estados.csv";

# Função PHP para leirtura de arquivos externos
# r indica que o arquivo será aberto apenas para a leitura.
$dados = fopen($arquivo,"r");

$tabela = "";

# Percorrer dados, até que encontre o final do arquivo
while(!feof($dados)){

    # Pegar a linha atual
    $linha = fgets($dados);
    # Dividir a linha atual e gerer um array, usando o ; como referência
    $colunas = explode(";",$linha);

    # Verificar se existe todos os itens no array
    if(count($colunas) >= 13){

        $uf = $colunas[0];
        $nomeEstado = $colunas[1];
        $pop2000 = $colunas[2];
        $homens = $colunas[3];
        $mulheres = $colunas[4];
        $urbana = $colunas[5];
        $rural = $colunas[6];
        $pop2010 = $colunas[7];
        $pop2021 = $colunas[8];
        $quantidade_cidades = $colunas[9];
        $capital = $colunas[10];
        $gentilico = $colunas[11];
        $area = $colunas[12];
        
        if($tabela == ""){
            $tabela.="
            <tr>
                <th>$uf</th>
                <th>$nomeEstado</th>
                <th class='text-end'>$homens</th>
                <th class='text-end'>$mulheres</th>
                <th class='text-end'>$rural</th>
                <th class='text-end'>$urbana</th>
                <th class='text-end'>$pop2010</th>
                <th class='text-center'>$capital</th>
            </tr>
            ";
        }else{
            
            if($mulheres > $homens){

                $homens_f = number_format($homens,0,"",".");
                $mulheres_f = number_format($mulheres,0,"",".");
                $urbana_f = number_format($urbana,0,"",".");
                $rural_f = number_format($rural,0,"",".");
                $pop2010_f = number_format($pop2010,0,"",".");
                
                $tabela.="
                <tr>
                    <td>$uf</td>
                    <td>$nomeEstado</td>
                    <td class='text-end'>$homens_f</td>
                    <td class='text-end'>$mulheres_f</td>
                    <td class='text-end'>$rural_f</td>
                    <td class='text-end'>$urbana_f</td>
                    <td class='text-end'>$pop2010_f</td>
                    <td class='text-center'>$capital</td>
                </tr>
                ";

            }

        }
        
    }


}

    $titulo = "Dados populacionais dos estados brasileiros";

    # Localizar a marcação [[titulo]] e subistituir pelo conteudo da variavel $titulo
    $tamplate = str_replace("[[titulo]]",$titulo,$tamplate);
    $tamplate = str_replace("[[tabela]]",$tabela,$tamplate);
    
    echo $tamplate;
