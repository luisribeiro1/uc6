<?

$rural_zero =[];

$arquivo = "arquivo_de_dados/municipios.csv";
$dados = fopen($arquivo, "r");



    while (($linha = fgetcsv($arquivo_de_dados)) !== false){
        if((int)
        $linha[$indice_populacao_rural]===0){
    
    $rural_zero[$linha[$indice_uf]]=$linha[$indice_cidade];
    
    }

}
fclose($arquivo_de_dados);
 asort($rural_zero);

 foreach($rural_zero as $uf => $cidade){
    echo "• $UF: $uf - cidade: $cidade <br> ";

}