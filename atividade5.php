<?php

function dataInvertida($data, $tipoDeConversao){

$converter = "";
$dia = "";
$mes = "";
$mes = "";

if($tipoDeConversao =="banco-de-dados"){
    $data = explode("-",$data);
    $dia = $data[2];
    $mes = $data[1];
    $ano = $data[0];
    $converter = "<br>". $dia . "/" . $mes . "/" . $ano . "";   
}
else{
    $data = explode("/", $data);
    $converter = "<br>" . $data[2] . "-" . $data[1] . "-". $data[0];
}
return $converter;
}

echo dataInvertida("05/03/2024", "usuario");

echo dataInvertida("2024-03-04", "banco-de-dados");
