<?php

$quantidade = "";

class Carro{
    
    #private: só pode ser usado na própria classe
    #protected: própria classe e em calsses importadas/herdadas
    #public: pode ser usada em qualquer parte do projeto
    
    #Atributos 
    private $cor;
    public $modelo;
    private $marca;
    private $velocidade = 0;

    # Métodos
    

    #Método construtor
    public function __construct($arg_marca, $arg_modelo, $arg_cor){
        $this->marca = $arg_marca;
        $this->modelo = $arg_modelo;
        $this->cor = $arg_cor;
    }
    # Método para obter a descrição do Carro
    public function obterCaracteristicas(){
        return "
        Marca: ".$this->marca."
        <br>Modelo: ".$this->modelo."
        <br>Cor: ".$this->cor;
    }

    #Método para acelerar
    public function acelerar($quantidade){
        $this->velocidade += $quantidade;
    }

    #Método para freiar
    public function freiar($quantidade){
        $this->velocidade -= $quantidade;
        if($this->velocidade < 0){
            $this->velocidade = 0;
        }

    }

    #Método para obter a velocidade
    public function obterVelocidade(){
        return $this->velocidade;
    }

    #Método aviso de excesso de velocidade
    public function avisoExcessoVelocidade(){
        if($this->velocidade > 80){
         echo $this->velocidade . "  Excesso de Velocidade";
        }else{
          return $this->velocidade;
        }
        
    }
}


# Criar o objeto $carro1 instanciando a classe Carro
$carro1 = new Carro("Fiat", "Uno" ,"Verde");
$carro2 = new Carro("Honda", "Fit" ,"Cinza");

echo $carro1->obterCaracteristicas();
$carro1->acelerar(40);
echo "<br>". $carro1->avisoExcessoVelocidade() . "  km/h <br>";
$carro1->freiar(15);    
echo  $carro1->avisoExcessoVelocidade() . "  km/h <br>";
$carro1->acelerar(25);
echo  $carro1->avisoExcessoVelocidade() . "  km/h <br>";
$carro1->acelerar(100);
echo $carro1->avisoExcessoVelocidade() . "  km/h <br>";
$carro1->freiar(72);
echo  $carro1->avisoExcessoVelocidade() . "  km/h <br>";

echo "<hr>";
echo $carro2->obterCaracteristicas();
