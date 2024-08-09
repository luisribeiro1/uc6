<?php

# Carregar o arquivo do template.
$template = file_get_contents("template.html");
# Caminho do arquivo.
$arquivo = "arquivos_de_dados/estados.csv";

# Função do PHP para leitura de arquivos externos.
# "r" indica que o arquivo aberto será apenas para leitura.
$dados = fopen($arquivo, "r");

$tabela = "";

# Percorrer dados, até que encontre o final do arquivo.
while(!feof($dados)) {
    # Pegar a linha atual.
    $linha = fgets($dados);
    # Dividir a linha atual e gerar um array, usando o ";" como referência.
    $colunas = explode(";", $linha);

    # Verificar se existe todos os itens no array.
    if (count($colunas) >= 13) {

        $uf = $colunas [0];
        $nomeEstado = $colunas[1];
        $pop2000 = $colunas[2];
        $homens = $colunas[3];
        $mulheres = $colunas[4];
        $urbana = $colunas[5];
        $rural = $colunas[6];
        $pop2010 = $colunas[7];
        $pop2021 = $colunas[8];
        $cidades = $colunas[9];
        $capital = $colunas[10];
        $gentilico = $colunas[11];
        $area = $colunas[12];
        
        if ($tabela == "") {
            $tabela.="
            <tr>
                <th>$uf</th>
                <th>$nomeEstado</th>
                <th>$cidades</th>
                <th>$capital</th>
                <th>$gentilico</th>
                <th>$area</th>
                <th>$homens</th>
                <th>$mulheres</th> 
                <th>$pop2000</th>
                <th>$pop2010</th>
                <th>$pop2021</th>
                <th>$urbana</th>
                <th>$rural</th>
            </tr>
            ";
        }else{
            # Formatar com 0 casas decimais, nenhum separador decimal e o ponto como separador de milhar.
            $homens_f = number_format($homens,0,"",".");
            $mulheres_f = number_format($mulheres,0,"",".");
            $pop2000_f = number_format($pop2000,0,"",".");
            $pop2010_f = number_format($pop2010,0,"",".");
            $pop2021_f = number_format($pop2021,0,"",".");
            $rural_f = number_format($rural,0,"",".");
            $urbana_f = number_format($urbana,0,"",".");

            # Mostra os estados onde a quantidade de mulheres são maiores que homens.
            if ($mulheres > $homens)
            
            $tabela.="
            <tr>
                <td>$uf</td>
                <td>$nomeEstado</td>
                <td>$cidades</td>
                <td>$capital</td>
                <td>$gentilico</td>
                <td>$area</td>
                <td>$homens_f</td>
                <td>$mulheres_f</td>
                <td>$pop2000_f</td>
                <td>$pop2010_f</td>
                <td>$pop2021_f</td>
                <td>$urbana_f</td>
                <td>$rural_f</td>   
            </tr>
            ";
        }    
    }
}

$titulo = "Dados Populacionais dos Estados brasileiros.";

#Localizar a marcação [[titulo]] e substituir pelo conteúdo da variável $titulo.
$template = str_replace("[[titulo]]", $titulo, $template);
$template = str_replace("[[tabela]]", $tabela, $template);

echo $template;


