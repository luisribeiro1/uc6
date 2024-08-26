<?php


class Carro{


    #private (privado): Só pode ser usada na própra classe
    #protected (protegido): Própria class e em class importadas/herdadas
    # public (público): pode ser usado em qualquer parte



    # Atributos
    private $cor;
    public $modelo;
    private $marca;
    private $velocidade = 0;
    
    # Métodos 

    # Método constructor 
    public function __construct($arg_marca, $arg_modelo, $arg_cor){
        $this->marca = $arg_marca; 
        $this->modelo = $arg_modelo; 
        $this->cor = $arg_cor; 
    
    }
    #Método para obter a descrição do carro
    public function obterCaracteristicas(){
        return"
            Marca: ".$this->marca."
        <br>Modelo: ".$this->modelo."
        <br>Cor: ".$this->cor;
    }

    # Método para acelera
    public function acelerar($quantidade){
        $this->velocidade += $quantidade;  # (+=)Adicionar
    }
    public function frear($quantidade){
        $this->velocidade -= $quantidade; # (-=)Retirar 
        if($this->velocidade < 0){
            $this->velocidade = 0;
        }
    }

    # Método para obter a velocidade 
    public function obterVelocidade(){
        return $this->velocidade;
    }
    public function avisoExcessoVelocidade(){
        if($this->velocidade > 80 ){
            
            echo $this->velocidade . " Reduza a velocidade ";
            
        }else{
            return $this->velocidade;
        }
        
    }

}

 #criar um objeto instanciando a classe Carro
 $carro1 = new Carro("Fiat", "Uno", "Preto");
 $carro2 = new Carro("Honda", "Civic", "Grafite");
 
echo $carro1->obterCaracteristicas();
echo "<hr>";  


$carro1->acelerar(40);
echo $carro1->avisoExcessoVelocidade() . " Km/h <br>";

$carro1->frear(10);
echo $carro1->avisoExcessoVelocidade() . " Km/h <br>";

$carro1->acelerar(25);
echo $carro1->avisoExcessoVelocidade() . " Km/h <br>";


$carro1->acelerar(35);
echo $carro1->avisoExcessoVelocidade() . " Km/h <br>";

$carro1->acelerar(35);
echo $carro1->avisoExcessoVelocidade() . " Km/h <br>";

echo "<hr>";  
 echo $carro2->obterCaracteristicas();
 echo "<hr>";
