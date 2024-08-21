<?php 
# Caminho do arquivo
$arquivo = "arquivos_de_dados/estados.csv";

$titulo = "<h1 class='text-center'>Dados dos Estados</h1>";
# Função do PHP para leitura de arquivos externos 
# r indica que o arquivo será aberto apenas para leitura    
$dados = fopen($arquivo, "r");
$info_estado = "";

# Percorrer dados, até que encontre o final do arquivo
while(!feof($dados)){
    # Pegar linha atual
    $linha = fgets($dados);
    # Dividir a linha atual e gerar um array usando o ; como referência
    $colunas = explode(";", $linha);

    # Verificar se existe todos os itens no array
    
    if (count($colunas) >= 13 ){

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

    
    

    if($ufParametro == $uf && $uf != "UF"){
        
        #Incluir as primeiras informações do estado
        $info_estado = "<p>
        Gentílico: <strong>$gentilico</strong> | 
        Capital: <strong>$capital</strong> | 
        Numero de municípios: <strong>$quantidade_cidades</strong> | 
        </p>";
        
        #Definir os percentuais da população
        $percentualBase = $pop2021 + ($pop2021 * 10 / 100);
        $perc_2000 = $pop2000 / $percentualBase * 100;
        $perc_2010 = $pop2010 / $percentualBase * 100;
        $perc_2021 = $pop2021 / $percentualBase * 100;

          #Define os percentuais de população urbana e rural
        $percentualUrbana = $urbana / $pop2010 * 100;
        $percentualRural = $rural / $pop2010 * 100;
          
        #Define os percentuais de população urbana e rural
        $percentualHomens = $homens / $pop2010 * 100;
        $percentualMulheres = $mulheres / $pop2010 * 100;

        // echo " $percentualBase | $perc_2000 | $perc_2010 | $perc_2021" ;

        $pop2000 = number_format($pop2000, 0, "", ".");
        $pop2010 = number_format($pop2010, 0, "", ".");
        $pop2021 = number_format($pop2021, 0, "", ".");

        $info_estado.= "
        <div class='col-md-12 mb-2'>   
            <div class='progress' style='height: 27px' role='progressbar'>
                <div class='progress-bar' style='width: $perc_2000%'>$pop2000 Em 2000</div>
            </div>
        </div>
        
        
        <div class='col-md-12 mb-2'>   
            <div class='progress' style='height: 27px' role='progressbar'>
                <div class='progress-bar' style='width: $perc_2010%'>$pop2010 Em 2010</div>
            </div>
        </div>
        
        <div class='col-md-12 mb-2'>   
            <div class='progress' style='height: 27px' role='progressbar'>
                <div class='progress-bar' style='width: $perc_2021%'>$pop2021 Em 2021</div>
            </div>
        </div>
        ";

      
        # Mostra os gráficos de população urbana, rural, masculina e feminina
        $info_estado.="
        <div class='d-flex justify-content-between'>
            <i class='bi bi-building-fill'></i>
            <i class='bi bi-tree-fill'></i> 
        </div>
    <div class='progress-stacked mb-4 bg-success-subtle'>
        <div class='progress' role='progressbar' style='width: $percentualUrbana%'>
            <div class='progress-bar bg-info'></div>
        </div>
        <div class='progress' role='progressbar' style='width: $percentualRural%'>
            <div class='progress-bar bg-success'></div>
        </div>
    </div>
    ";

    $info_estado.="
       <div class='d-flex justify-content-between'>
            <i class='bi bi-person-standing'></i>
            <i class='bi bi-person-standing-dress'></i> 
        </div>
    <div class='progress-stacked mb-4 bg-success-subtle'>
        <div class='progress' role='progressbar' style='width: $percentualHomens%'>
            <div class='progress-bar bg-info'></div>
        </div>
        <div class='progress' role='progressbar' style='width: $percentualMulheres%'>
            <div class='progress-bar bg-success'></div>
        </div>
    </div>
    ";



        
    }

    
}
}


