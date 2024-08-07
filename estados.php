<?php

# carregar o arquivo do tamplate
$tamplate = fopen_get_contents("tamplate.html")

# cantinho do arquivo
$arquivo = "arquivo_de_dados/estados.csv";

# funcao de PHP para leitura de arquivos externos
# indica que o arquivo sera sera aberto apenas para leitura
$dados = fopen($arquivo, "r" );

$tabela

# Percorrer dados, até que encontre o final do arquivo 
while(!feof($dados)){
    $linha = fgtes($dados);

    # pegar a linha atual
    $linha = fgets($dados);

    # dividir a linha atual e gerar  um array , usando o ; como refêrencia
    $colunas = explode(";",$linha);
    
    #verifica se existe todos os itens no array
     if(count($colunas) >= 13){

    

      $uf = $colunas[0];
      $nomeEstado = $colunas[1];
      $pop2000 = $colunas[2];
      $homens = $colunas[3];
      $mulheres = $colunas[4];
      $rural = $colunas[6];
      $pop2010 = $colunas[7];
      $pop2021 = $colunas[8];
      $quantidade_cidades = $colunas[9];
      $capital = $colunas[10];
      $gentilico = $colunas[11];
      $area = $colunas[12];
     }
      
    if($tabela==""){
        $tabela.="
        
       $tabela.="

       <tr>
       <td>$homens</td>    
       <td>$mulheres</td>    
       <td>$rural</td>    
       <td>$urbana</td>    
       <td>$pop2010</td>    
       <td>$uf</td>    
       <td>$nomeEstado</td>    
    
      </tr>
      ";
      
       }else{
        
           #formata com 0 casas decimais , nenhum separador decimal eo ponto como
           #separador de milhar    

        $homens_f = number_format($homens,0,"",".");  
        $mulheres_f = number_format($mulheres,0,"",".");  
        $rural_f = number_format($rural,0,"",".");  
        $urbana_f = number_format($urbana,0,"",".");  
        $pop2010_f = number_format($pop2010,0,"",".");  



        $tabela.="
      <tr> 
           
       
      <td>$uf</td> 
      <td>$nomeEstado</td>   
      <td class= 'text-end'>$homens_f</td>    
      <td class= 'text-end'>$mulheres_f</td>    
      <td class= 'text-end'>$rural_f</td>    
      <td class= 'text-end'>$urbano_f</td>    
      <td class= 'text-end'>$pop2010_f</td>    
      <td class= 'text-end'>$capital_f</td>    
         
     </tr>
     ";

     $nomeEstado = $colunas[1];
     echo $nomeEstado . "<br>";

    }


 

    
}
$titulo = "Dados populacionais dos estados brasileiros";

# localiza a marcação [[titulo]] e substituir pelo conteudo da variável 
# titulo 
$tamplate = str_replace("[[titulo]]", $titulo, $tamplate);
$tamplate = str_replace("[[tabela]]", $tabela, $tamplate);

echo $tamplate;

