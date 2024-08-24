<?php

class Carro {
    #private (privado): so pode ser usado na própria classe
    # protected (protegido) : Própria classe e em classes importadas/herdadas
    # Public (público) : pode ser sado em qualquer parte do projeto
    #Atributos
    private $cor;
    private $modelo;
    private $marca;
    private $velocidade = 0;

    # Metódos 


    # Metódos contrutor 
    public function __construct($arg_marca, $arg_modelo, $arg_cor){
        $this->marca = $arg_marca;
        $this->modelo = $arg_modelo;
        $this->cor = $arg_cor;


    }
 # Método para obter a descrição do carro 
 public function obterCaracteristicas(){
    return 
    " Marca : ". $this->marca."
  <br>Modelo :".$this->modelo."
  <br>Cor : ".$this->cor;
    
 }
 #Metódo para acelerar 
 public function acelerar($quantidade){
    $this->velocidade += $quantidade;

 }

 # Metodo para frear
 public function frear($quantidade){
    $this->velocidade -=$quantidade;
    if ($this->velocidade < 0){
        $this-> velocidade = 0;
    }
 }


# Mrtodo para obeter a velocidade 
public function obterVelocidade(){
    return $this->velocidade;

}
public function verificarVelocidade(){
    if ($this->velocidade >80){
        return "reduza a velocidade";
        echo "reduza a velocidade";
    }
 }

}

#criar o objeto $carro1 instaciando a classe Carro

$carro1 = new Carro("Fiat","Uno","Verde");
$carro2 = new Carro("Honda","Fit","Cinza");


echo $carro1->obterCaracteristicas();
echo $carro1->obterVelocidade() . " km/h <br>";
$carro1->acelerar(40);
 echo $carro1->obterVelocidade() . " km/h <br>";

$carro1->frear(15);
echo $carro1->obterVelocidade() . " km/h <br>";

$carro1->acelerar(80);
echo $carro1->obterVelocidade() . " km/h <br>";
echo $carro1-> verificarVelocidade();

echo "<hr>";
echo $carro2->obterCaracteristicas();