<?php
$principio = "Estado de ";

# Array associativo com a lista de estados
$nomesEstados = [
    "AC" => "Acre",
    "AL" => "Alagoas",
    "AM" => "Amazonas",
    "AP" => "Amapá",
    "BA" => "Bahia",
    "CE" => "Ceará",
    "DF" => "Distrito Federal",
    "ES" => "Espírito Santo",
    "GO" => "Goiás",
    "MA" => "Maranhão",
    "MG" => "Minas Gerais",
    "MS" => "Mato Grosso do Sul",
    "MT" => "Mato Grosso",
    "PA" => "Pará",
    "PB" => "Paraíba",
    "PE" => "Pernambuco",
    "PI" => "Piauí",
    "PR" => "Paraná",
    "RJ" => "Rio de Janeiro",
    "RN" => "Rio Grande do Norte",
    "RO" => "Rondônia",
    "RR" => "Roraima",
    "RS" => "Rio Grande do Sul",
    "SC" => "Santa Catarina",
    "SE" => "Sergipe",
    "SP" => "São Paulo",
    "TO" => "Tocantins"

];

if($ufParametro == 'AC' || $ufParametro == 'AM' ||$ufParametro == 'AP' ||$ufParametro == 'CE'||$ufParametro == 'ES' ||$ufParametro == 'MA' ||$ufParametro == 'PA' ||$ufParametro == 'PI' ||$ufParametro == 'PR' ||$ufParametro == 'RJ' ||$ufParametro == 'RN' ||$ufParametro == 'RS' ||$ufParametro == 'TO' ||$ufParametro == 'MT' ||$ufParametro == 'MS'){
    $principio = "Estado do ";
}
if($ufParametro == 'BA' ||$ufParametro == 'PB'){
    $principio = "Estado da ";
}if($ufParametro == 'DF' ){
    $principio = '';
}