<?php
$template = file_get_contents("template.html", "r");


$ufParametro = $GET["uf"];
$cidades= $GET["municipios"];

$cidadeParametro = str_replace('%20', '', $cidades);

include('info_cidades.php');


$titulo = "Cidade de $cidadeParametro";

$template = str_replace("[[titulo]]", $titulo, $template);
$template = str_replace("[[conteudo]]", $info_cidades, $template);
$template = str_replace("[[tabela]]","",$template);


echo $template;





