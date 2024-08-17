<?php
 
 
 #Caminho do arquivo
 $arquivo = "arquivos_de_dados/estados.csv";
 
 # Função do PHP para leitura de arquivos externos
 $dados = fopen($arquivo, "r");
 
 $info_estado = "";
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

      

      if($ufParametro==$uf && $uf!='UF'){

        #Definir os percentuais da Populaçao
      $percentualBase = $pop2021 + ($pop2021 * 10 / 100);
      $porc_2000 = $pop2000 / $percentualBase * 100;
      $porc_2010 = $pop2010 / $percentualBase * 100;
     $porc_2021 = $pop2021 / $percentualBase * 100;
     

         echo "$porc_2000 | $porc_2010 | $porc_2021";

        $info_estado = "
    <div class='col-md-12 mb-4'>
         <div class='progress' style='height: 50px' role='progressbar'>
           <div class='progress-bar' style='width: $porc_2000%'>$pop2000</div>
        </div>
        </div> ";
      }
      
    }
 }
