<?php

class Carro {

    # private (privado): Só pode ser usado na própria classe 
    # protected (protegido): Própria classe e em classes importadas/herdeiras 
    # public (público): Pode ser usado em qualquer parte do projeto

    # Atributos
    private $cor;
    private $modelo;
    private $marca;
    private $velocidade = 0;


    # Métodos

    # Método construtor
    public function __construct($arg_marca, $arg_modelo, $arg_cor){
        $this->marca = $arg_marca;
        $this->modelo = $arg_modelo;
        $this->cor = $arg_cor;
    }

    # Método para obter a descrição do carro
    public function obterCaracteristicas(){
        return "Marca: ".$this->marca."
        <br>Modelo: ".$this->modelo."
        <br>Cor: ".$this->cor; 
        
    }

    # Método para acelerar
    public function acelerar($quantidade){
        $this->velocidade += $quantidade;
    }

    # Método para frear
    public function frear($quantidade){
        $this->velocidade -= $quantidade;
        if($this->velocidade <0){
            $this->velocidade = 0;
        }
    }

    # Método obter a velocidade
    public function obterVelocidade(){
        return $this->velocidade;
    }

    public function excessoVelocidade(){
        if($this->velocidade > 80){
          return "Reduza a velocidade";
        }
    }

}

# Criar o objeto $carro1 instanciando a classe Carro
$carro1 = new Carro("Fiat","Uno","Verde");
$carro2 = new Carro("Honda","Fit","Cinza");

echo $carro1->obterCaracteristicas() . "<br>";

$carro1->acelerar(40);
echo $carro1->obterVelocidade() . " km/h <br>";

$carro1->frear(15);
echo $carro1->obterVelocidade() . " km/h <br>";

$carro1->acelerar(25);
echo $carro1->obterVelocidade() . " km/h <br>";

$carro1->acelerar(50);
echo $carro1->obterVelocidade() . " km/h <br>";
echo $carro1->excessoVelocidade();

echo "<hr>";
echo $carro2->obterCaracteristicas();

