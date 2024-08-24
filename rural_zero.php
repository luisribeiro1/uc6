<?

$rural_zero =[];

$arquivo = "arquivo_de_dados/municipios.csv";
$file = fopen("municipios.csv","r");



    while (($row = fgetcsv($file))=== false ){

        
        $cidade = $row[0];
        $uf = $row [1];

        $populacao_rural = $row[2];

        if ($populacao_rural == 0){
            $rural_zero[$uf] = $cidade;

        }
                      
    
    }

Ksort($rural_zero);


 foreach($rural_zero as $uf => $cidade){
    echo "Cidade: $cidade, $UF: $uf"; 

}