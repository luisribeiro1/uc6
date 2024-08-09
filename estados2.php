<?php

# Carregar o arquivo do template
$template = file_get_contents("template.html", "r");

#Caminho do arquivo
$arquivo = "arquivos_de_dados/estados.csv";

# Função do PHP para leitura de arquivos externos
$dados = fopen($arquivo, "r");

$tabela = "";
$sudeste = "";
$norte = "";
$sul = "";
$nordeste = "";
$centro_oeste = "";

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

     if($tabela== ""){
        $tabela.="
        <tr>
        <th>$uf</th>
        <th>$nomeEstado</th>
        <th class='text-end'>$homens</th>
        <th class='text-end'>$mulheres</th>
        <th class='text-end'>$urbana</th>
        <th class='text-end'>$rural</th>
        <th class='text-end'>$pop2010</th>
        <th class='text-end'>$quantidade_cidades</th>
        <th>$capital</th>
        </tr>
      ";
     }else{
       

        # Formatar com 0 casas decimais, nenhum separador decimal e o ponto como separador de milhar

        $homens_f = number_format($homens,0,"",".");
        $mulheres_f = number_format($mulheres,0,"",".");
        $rural_f = number_format($rural,0,"",".");
        $urbana_f = number_format($urbana,0,"",".");
        $pop2010_f = number_format($pop2010,0,"",".");
       

        if($quantidade_cidades > 300 ){
            $cordofundo = ("bg-primary-subtle");
          $tabela.="
          <tr>
          <td class='$cordofundo'>$uf</td>
          <td class='$cordofundo'>$nomeEstado</td>
          <td class='text-end $cordofundo'>$homens_f</td>
          <td class='text-end $cordofundo'>$mulheres_f</td>
          <td class='text-end $cordofundo'>$urbana_f</td>
          <td class='text-end $cordofundo'>$rural_f</td>
          <td class='text-end $cordofundo'>$pop2010_f</td>
          <td class='text-end $cordofundo'>$quantidade_cidades</td>
          <td>$capital</td>
          </tr>
        ";
        }
        elseif($quantidade_cidades < 100 ){
            $cordofundo = ("bg-success-subtle");
          $tabela.="
          <tr>
          <td class='$cordofundo'>$uf</td>
          <td class='$cordofundo'>$nomeEstado</td>
          <td class='text-end $cordofundo'>$homens_f</td>
          <td class='text-end $cordofundo'>$mulheres_f</td>
          <td class='text-end $cordofundo'>$urbana_f</td>
          <td class='text-end $cordofundo'>$rural_f</td>
          <td class='text-end $cordofundo'>$pop2010_f</td>
          <td class='text-end $cordofundo'>$quantidade_cidades</td>
          <td>$capital</td>
          </tr>
        ";
        }
        else{
            $cordofundo = "bg-warning";
            $tabela.="
          <tr>
          <td class='$cordofundo'>$uf</td>
          <td class='$cordofundo'>$nomeEstado</td>
          <td class='text-end $cordofundo'>$homens_f</td>
          <td class='text-end $cordofundo'>$mulheres_f</td>
          <td class='text-end $cordofundo'>$urbana_f</td>
          <td class='text-end $cordofundo'>$rural_f</td>
          <td class='text-end $cordofundo'>$pop2010_f</td>
          <td class='text-end $cordofundo'>$quantidade_cidades</td>
          <td>$capital</td>
          </tr>
        ";
        }
        
        
        
        
        
        
        
        
       $tabela_linha="
        <tr>
        
        <td class='$cordofundo'>$uf</td>
        <td class='$cordofundo'>$nomeEstado</td>
        <td class='text-end $cordofundo'>$homens_f</td>
        <td class='text-end $cordofundo'>$mulheres_f</td>
        <td class='text-end $cordofundo'>$urbana_f</td>
        <td class='text-end $cordofundo'>$rural_f</td>
        <td class='text-end $cordofundo'>$pop2010_f</td>
        <td class='text-end $cordofundo'>$quantidade_cidades</td>
        <td>$capital</td>
        
        </tr>";
         
       
        
        
        if($uf== 'SP' or $uf=='MG' or $uf=='RJ' or $uf=='ES'){
              $sudeste.= $tabela_linha;
        }
        elseif($uf== 'RS' or $uf=='PR' or $uf=='SC'){
              $sul.= $tabela_linha;
        }
        elseif($uf== 'AC' or $uf=='AM' or $uf=='AP' or $uf=='PA' or $uf== 'RO' or $uf=='RR' or $uf=='TO'){
              $nordeste.= $tabela_linha;
        }
        
        

       
}



     }

     

     }

$tabela .= "<tr><td colspan='9'>Regiao Sudeste</td></tr>$sudeste";
$tabela .= "<tr><td colspan='9'>Regiao Sul</td></tr>$sul";
$tabela .= "<tr><td colspan='9'>Regiao nordeste</td></tr>$nordeste";

   
    

$titulo = "Dados populacionais dos estados brasileiros";

# localizar a marcaçao [[titulo]] e substituir pelo conteudo da variavel
#titulo
$template = str_replace("[[titulo]]", $titulo, $template);
$template = str_replace("[[tabela]]", $tabela, $template);

echo $template;