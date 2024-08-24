<?php

class Carro {

    #privete (privado): só pode ser usado na propria casse
    #protected (protegido): Propria classe e em clases importadas/herdadas
    #public (publico): pode ser usado em qualquer pare do projeto

    # Atributos
    private $cor;
    public $modelo;
    private $marca;
    private $velocidade = 0;

    # Metodos

    # Metodo construtor
    public function __construct($arg_marca, $arg_modelo, $arg_cor){
        $this->marca = $arg_marca;
        $this->modelo = $arg_modelo;
        $this->cor = $arg_cor;
    } 
    
    # Metodo para obter a descrição  do carro
    public function obterCaracteristicas(){
        return "Marca: ".$this->marca."
        <br>Modelo: ".$this->modelo."
        <br>Cor: ".$this->cor;
    }

    # Metodo para acelerar
    public function acelerar($quantidade){
        $this->velocidade += $quantidade;
    }
    # Metodo para frear
    public function frear($quantidade){
        $this->velocidade -= $quantidade;
        if($this->velocidade < 0){
            $this->velocidade = 0;
        }    
    } 
    
    # Metodo para obter a velocidade
    public function obterVelocidade(){
        return $this->velocidade;
    }

    public function avisoExcessoVelocidade(){
        
        if($this->velocidade > 80){
            $this->velocidade = 0;
        }
         return $this->AvisoReduzaVelocidade;
         

             

         

}

       # Criar o objeto $carro1 instanciando a classe Carro
      $carro1 = new Carro("Fiat","Uno","Verde");      
      $carro2 = new Carro("Honda","Fit","Cinza");
       
      
      
       echo $carro1->obterCaracteristicas();

       $carro1->acelerar(40);
       echo "<br>". $carro1->obterVelocidade().  "Km/h <br>";

       $carro1->frear(15);
       echo $carro1->obterVelocidade().  "Km/h  <br>";
       

       $carro1->acelerar(25);
       echo $carro1->obterVelocidade(). "Km/h  <br>";

      



       echo "<br>";
       echo $carro2->obterCaracteristicas();
       