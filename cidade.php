<?php

$tamplate = file_get_contents("tamplate.html","r");

    include('uteis.php');
    # Pegar o parâmetro uf na url; $_GET aptura o paramentros na url
    $ufParametro = $_GET["uf"];
    $cidadePesquisa = $_GET["cidade"];

    $CidadeParametro = str_replace('%20',' ',$cidadePesquisa);
    include('info_cidade.php');

        $titulo = "Cidade de $CidadeParametro";

        $tamplate = str_replace("[[tabela]]","",$tamplate);
        $tamplate = str_replace("[[titulo]]",$titulo,$tamplate);
        $tamplate = str_replace("[[conteudo]]",$info_cidade,$tamplate);
        

        echo $tamplate; #

