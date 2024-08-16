<?php
 
 include('uteis.php');
# pegar o parametro  uf ba url. $_GET captura parâmetro na url
$ufParametro = $_GET["uf"];

# Carregar o arquivo do template
$template = file_get_contents("template.html");

# Caminho do arquivo
$arquivo = "arquivos_de_dados/municipios.csv";

# Função do PHP para leitura de arquivos externos
# r indica que o arquivoserá aberto apenas para leitura
$dados = fopen($arquivo, "r");

$tabela = "";
$ufAnterior = "";

while(!feof($dados)) {
    
    # Pegar a linha atual
    $linha = fgets($dados);

    # dividir a linha atual e gerar um array, usando o ";" como referência.
    $coluna = explode(";", $linha);

    # verificar se existem todos os itens no array
    if(count($coluna) >= 10){
        
        $codigo = $coluna[0];
        $uf = $coluna[1];
        $municipio = $coluna[2];
        $pop2000 = $coluna[3];
        $homens = $coluna[4];
        $mulheres = $coluna[5];
        $urbana = $coluna[6];
        $rural = $coluna[7];
        $pop2010 = $coluna[8];
        $pop2021 = $coluna[9];

    
        if($tabela==""){
    
            $tabela.="
            <tr>
            <th class='text-center'>$codigo</th>
            <th class='text-center'>$uf</th>
            <th class='text-center'>$municipio</th>
            <th class='text-center'>$homens</th>
            <th class='text-center'>$mulheres</th>
            <th class='text-center'>$urbana</th>
            <th class='text-center'>$rural</th>
            <th class='text-center'>$pop2000</th>
            <th class='text-center'>$pop2021</th>
            </tr>
            ";

        }else{
            
            # Formatar com 0 casas decimais, nenhum separador decimal e o ponto como separador de milhar
            $homens_f = number_format($homens,0,"",".");
            $mulheres_f = number_format($mulheres,0,"",".");
            $urbana_f = number_format($urbana,0,"",".");
            $rural_f = number_format($rural,0,"",".");
            $pop2000_f = number_format($pop2000,0,"",".");
            $pop2021_f = number_format($pop2021,0,"",".");
            
            if($ufParametro==$uf){

           
            if($ufAnterior != $uf){
                $tabela.= "<tr><td colspan='9'>Estado de $uf</td></tr>";
            }
            
            
            $tabela.="
            <tr class = ''>
            <td class='text-center'>$codigo</td>
            <td class='text-center'>$uf</td>
            <td class='text-center'>$municipio</td>
            <td class='text-center'>$homens_f</td>
            <td class='text-center'>$mulheres_f</td>
            <td class='text-center'>$urbana_f</td>
            <td class='text-center'>$rural_f</td>
            <td class='text-center'>$pop2000_f</td>
            <td class='text-center'>$pop2021_f</td>
            </tr>
            ";
            
            $ufAnterior = $uf;

        }
}
}
}



$titulo = "Estados de " .$nomesEstados[$ufParametro];
# Localizar a marcação "[[titulo]]" e substituir pelo conteúdo da variável $titulo
$template = str_replace("[[titulo]]", $titulo, $template);
$template = str_replace("[[tabela]]", $tabela, $template);

echo $template;