<?php

# Carregar o arquivo do template
$template = file_get_contents("template.html", "r");

#Caminho do arquivo
$arquivo = "arquivos_de_dados/estados.csv";

# Função do PHP para leitura de arquivos externos
$dados = fopen($arquivo, "r");

$conteudo = "";
# Percorrer dados, até que encontre o final do arquivo
while(!feof($dados)){

    # pegar a linha atual
     $linha = fgets($dados);

     # dividir a linha atual e gerar um arraryu, usando o ; como referencia
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

       

      //   # Formatar com 0 casas decimais, nenhum separador decimal e o ponto como separador de milhar

      //   $homens_f = number_format($homens,0,"",".");
      //   $mulheres_f = number_format($mulheres,0,"",".");
      //   $rural_f = number_format($rural,0,"",".");
      //   $urbana_f = number_format($urbana,0,"",".");
      //   $pop2010_f = number_format($pop2010,0,"",".");
       

      
     
        $conteudo.=" <div class='col-4 mb-4'>

                <div class='card'>
                    <div class='card-body text-center'>
                        <span class='fw-bold'>$uf - $nomeEstado</span><br>
                        <span class='fs-7'>
                            <i class='bi bi-person-standing text-info'></i>41,85%
                            <i class='bi bi-person-standing-dress text-danger'></i>51,12%
                        </span>
                        <br>
                        <span class='fs-7'>
                            <i class='bi bi-tree-fill text-success'></i>13,25%
                            <i class='bi bi-building-fill text-primary'></i>86,69%
                        </span>
                        <br>
                        <a href= 'municipios.php?uf=$uf'>ver municipios</a>
                    </div>
                </div>
            </div>";
      
        
       //$tabela_linha="
       // <tr>
        
       // <td class='$cordofundo'>$uf</td>
       // <td class='$cordofundo'><a href='municipios.php?uf=$uf'</a>$nomeEstado</td>
       // <td class='text-end $cordofundo'>$homens_f</td>
       // <td class='text-end $cordofundo'>$mulheres_f</td>
       // <td class='text-end $cordofundo'>$urbana_f</td>
       // <td class='text-end $cordofundo'>$rural_f</td>
       // <td class='text-end $cordofundo'>$pop2010_f</td>
       // <td class='text-end $cordofundo'>$quantidade_cidades</td>
       // <td>$capital</td>
        
       // </tr>";
         
       
        
        
      //   if($uf== 'SP' or $uf=='MG' or $uf=='RJ' or $uf=='ES'){
      //         $sudeste.= $tabela_linha;
      //   }
      //   elseif($uf== 'RS' or $uf=='PR' or $uf=='SC'){
      //         $sul.= $tabela_linha;
      //   }
      //   elseif($uf== 'AC' or $uf=='AM' or $uf=='AP' or $uf=='PA' or $uf== 'RO' or $uf=='RR' or $uf=='TO'){
      //         $norte.= $tabela_linha;
      //   }
      //   elseif($uf== 'AL' or $uf=='BA' or $uf=='CE' or $uf=='MA' or $uf== 'PB' or $uf=='PN' or $uf=='PI' or $uf== 'RN' or $uf=='SE'){
      //         $nordeste.= $tabela_linha;
      //   }
      //   elseif($uf== 'GO' or $uf=='MT' or $uf=='MS' or $uf=='DF'){
      //         $centro_oeste.= $tabela_linha;
      //   }
        
        

       
}

     }

$titulo = "Dados populacionais dos estados brasileiros";

# localizar a marcaçao [[titulo]] e substituir pelo conteudo da variavel
#titulo
$template = str_replace("[[titulo]]", $titulo, $template);
$template = str_replace("[[conteudo]]", $conteudo, $template);
$template = str_replace("[[tabela]]","", $template);

echo $template;