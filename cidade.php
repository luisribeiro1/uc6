<?php

# Carregar o arquivo do template
$template = file_get_contents("template.html");

# Caminho do arquivo
$arquivo = "Arquivo_de_dados/municipios.csv";

# Função do PHP para leitura de arquivos externos
# r indica que o arquivoserá aberto apenas para leitura
$dados = fopen($arquivo, "r");

// vai ignorar a linha 0 do array
fgets($dados);

$codeParametro = $_GET['codigo'];
$cidade="";

# Percorrer dados até encontrar o final do arquivo
while(!feof($dados)){
    
    # Pegar a linha atual
    $linha = fgets($dados);
    
    # dividir a linha atual e gerar um array, usando o ";" como referência.
    $coluna = explode(";", $linha);
    
    # verificar se existem todos os itens no array

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

    # Definir os percentuais da população
    $percentualBase = $pop2021 * 1.1;
    $porc_2000 = $pop2000 / $percentualBase * 100;
    $porc_2010 = $pop2010 / $percentualBase * 100;
    $porc_2021 = $pop2021 / $percentualBase * 100;

    # Formatando os numeros

    $pop2000 = number_format($pop2000,0,"",".");
    $pop2010 = number_format($pop2010,0,"",".");
    $pop2021 = number_format($pop2021,0,"",".");


    if($codeParametro == $codigo){

        # Define os percentuais de População Urbana e Rural

    $percentualUrbana = $urbana / $pop2010 * 100;
    $percentualRural = $rural / $pop2010 * 100;

    # Define os percentuais de População de Homens e de Mulheres

    $percentualHomens = $homens / $pop2010 * 100;
    $percentualMulheres = $mulheres / $pop2010 * 100;



    $cidade="
        <div class='col-12 mb-4'>
                <div class='card'>
                    <div class='card-body text-center'>
                        <span class='fw-bold'>$municipio - $uf</span><br>
                        <span class='fs-7'>
                            <i class='bi bi-person-standing text-info'></i>$homens
                            <i class='bi bi-person-standing-dress text-danger'></i>$mulheres
                        </span>
                        <br>
                        <span class='fs-7'>
                            <i class='bi bi-tree-fill text-sucess'></i>$rural
                            <i class='bi bi-building-fill text-primary'></i>$urbana
                        </span>
                        <br>
                    </div>
                </div>
        </div>
        <br>
    ";

    $cidade.="
            <h2 class='text-center'> Gráfico de evolução populacional </h2>
            <div class='col-md-12 mb-4'>
            <div class='progress mb-3' role='progressbar' style='height:30px'>
                <div class='progress-bar bg-primary' style='width: $porc_2000%'>$pop2000 em 2000</div>
            </div>
            
            <div class='progress mb-3' role='progressbar' style='height:30px'>
                <div class='progress-bar bg-primary' style='width: $porc_2010%'>$pop2010 em 2010</div>
            </div>
        
            <div class='progress mb-3' role='progressbar' style='height:30px'>
                <div class='progress-bar bg-primary' style='width: $porc_2021%'>$pop2021 em 2021</div>
            </div>
            </div>
    ";

            $cidade .= "
            <h2 class='text-center'> Gráfico de setorização populacional </h2>
                <div class='col-md-12 mb-4'>
                <div class='d-flex justify-content-between'>
                    <i class='bi bi-building-fill'></i>
                    <i class='bi bi-tree-fill'></i>
                </div>
                <div class='progress-stacked mb-4'>
  
                    <div class='progress' role='progressbar' style= 'width: $percentualUrbana%'>
                        <div class='progress-bar bg-info'></div>
                    </div>
  
                    <div class='progress' role='progressbar' style='width: $percentualRural%'>
                        <div class='progress-bar bg-success'></div>
                    </div>
                </div>
                </div>
            ";
            $cidade .= "
            <div class='col-md-12 mb-4'>
                <div class='d-flex justify-content-between'>
                    <i class='bi bi-person-standing'></i>
                    <i class='bi bi-person-standing-dress'></i>
                </div>
                <div class='progress-stacked mb-4'>
  
                    <div class='progress' role='progressbar' style= 'width: $percentualHomens%'>
                        <div class='progress-bar bg-primary'></div>
                    </div>
  
                    <div class='progress' role='progressbar' style='width: $percentualMulheres%'>
                        <div class='progress-bar bg-danger'></div>
                    </div>

                </div>
            </div>
            ";;
}
}
}

$template = str_replace("[[titulo]]", "", $template);
$template = str_replace("[[tabela]]", "", $template);
$template = str_replace("[[conteudo]]", "", $template);
$template = str_replace("[[cidade]]", $cidade,$template);

echo $template;