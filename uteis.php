<?php

#$habilidades = ["HTML","CSS","JS","PHP"];
# Array  associativo com a lista de Estado

$nomesEstados = [
    "AC"=>"Acre",
    "Al"=>"Alagoas",
    "AP"=>"Amapa",
    "AM"=>"Amazonas",
    "BA"=>"Bahia",
    "CE"=>"Cearà",
    "DF"=>"Distrito Federal",
    "ES"=>"Espirito Santo",
    "GO"=>"Goias",
    "MA"=>"Maranhao",
    "Mt"=>"Mato Grosso",
    "Ms"=>"Mato Grosso do Sul",
    "Mg"=>"Minas Gerais",
    "PA"=>"Para",
    "PB"=>"Paraiba",
    "PE"=>"Pernambuco",
    "RJ"=>"Rio de Janeiro",
    "RN"=>"Rio Grande do Norte",
    "RS"=>"Rio Grande do Sul",
    "RO"=>"Rondonia",
    "RR"=>"Roraima",
    "SC"=>"Santa Catarina",
    "Sp"=>"Sao Paulo",
    "SE"=>"Sergipe",
    "TO"=>"Tocantins",
    

    
];

$dedoda = " de ";
if($ufParametro=="BA"){
    $dedoda = " da ";

}
if($ufParametro=="RJ" or $ufParametro=="RN" or $ufParametro=="RS"){
    $dedoda = " do ";
}


