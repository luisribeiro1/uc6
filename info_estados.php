<?php


 # Caminho do arquivo
 $arquivo = "arquivo_de_dados/estados.csv";

 
 # função do PHP para leitura de arquivos externos 
 $dados = fopen($arquivo, "r");

 $info_estados = "";



 #percorrer dados, até que encontre o final do arquivo
    while(!feof($dados)){

     # pegar a linha atual
     $linha = fgets($dados);

     # dividir a linha atual e gerar um array, usando o ; como referencia 
     $colunas = explode(";", $linha);

     # verificar se existe todos os items do array
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

     # incluir as primeiras informações do estado
      $info_estados = "<p>
      Gentilico:<strong>$gentilico</strong> | 
      Capital:<strong>$capital</strong> | 
      Numero de municipios:<strong>$quantidade_cidades</strong> 
      </p>";

     #definir os percentuais da população
        if($ufParametro==$uf && $uf!='UF'){

            

          $percentualBase= $pop2021 + $pop2021 * 10 / 100;
          $perc_2000 = $pop2000 / $percentualBase * 100;
          $perc_2010 = $pop2010 / $percentualBase * 100;
          $perc_2021 = $pop2021 / $percentualBase * 100;
          


            #echo "$percentualBase|$perc_2010|$perc_2021";


             # define os percentuais de população urbana e rural
             $percentualUrbana = $urbana / $Pop2010 * 100 ; 
             $percentualRural = $rural / $Pop2010 * 100 ; 

             # define os percentuais de população homens  e mulheres
             $percentualHomens = $homens / $Pop2010 * 100 ; 
             $percentualMulheres = $mulhres / $Pop2010 * 100 ;


            #aplicar o separador de milhar para os valores inteiros
            #nenhuma casa decimal,nenhum separador decimal , usa o ponto como separador de
            $pop2000 =number_format($pop2000,0,"",".");
            $pop2010 =number_format($pop2010,0,"",".");
            $pop2021 =number_format($pop2021,0,"",".");

          
           $info_estados .= "
          <div class='col-md-12 mb-4'> 
            <div class='progress mb-2' style='height: 30px' role='progressbar'>
               <div class='progress-bar' style='width:$perc_2000%'>$perc_2000 em 2000 </div>
           </div>    
            <div class='progress mb-2' style='height: 30px' role='progressbar'>
               <div class='progress-bar' style='width:$perc_2010%'>$perc_2010 em 2021 </div>
           </div>    
            <div class='progress mb-2' style='height: 30px' role='progressbar'>
               <div class='progress-bar' style='width:$perc_2021%'>$perc_2021 em 2021 </div>
           </div>    
  
          </div>";

          # define os percentuais de população urbana e rural
         # $percentualUrbana = $urbana / $Pop2010 * 100 ; 
         # $percentualRural = $rural / $Pop2010 * 100 ; 
         # $info_estados.="
         # <div class='progress-stacked'>
         $info_estados.="
            <div class='d-flex justify-content-between'>
              <i class='bi bi-building-fill'></li>
              <i class='bi bi-tree-fill'></li>
            </div>

            <div class='progress-stacked mb-4'>
               <div class='progress' role='progressbar' style='width:$percentualRural'>
                   <div class='progress-bar bg-info'></div>
                </div>
                    <div class='progress' role='progressbar'  style='width:$percentualUrbana'>
                       <div class='progress-bar bg-success'></div>
                    </div>
            </div>";
            #mostrar o grafico de homens e mulheres
         $info_estados.="
            <div class='d-flex justify-content-between'>
              <i class='bi bi-person-strading'></li>
              <i class='bi bi-person-strading-dress'></li>
            </div>

            <div class='progress-stacked mb-4'>
               <div class='progress' role='progressbar' style='width:$percentualHomens%'>
                   <div class='progress-bar bg-primary'></div>
                </div>
                    <div class='progress' role='progressbar'  style='width:$percentualMulheres%'>
                       <div class='progress-bar bg-danger'></div>
                    </div>
            </div>";
          
        
        }
    
    }
}
     