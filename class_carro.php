<?php


class Carro {
    
    # private (privado): só pode ser usado na propria classe
    # protect (protegido): Própria classe e em classes importadas/herdadas
    # public (publico): pode ser usado em qualquer parte do projeto

    # Atributos 
    private $cor;
    public $modelo;
    private $marca;
    private $velocidade = 0;

    # Métodos

    # Método construtor
    public function __construct($arg_marca, $arg_modelo,$arg_cor){
        $this->marca = $arg_marca;
        $this->modelo = $arg_modelo;
        $this->cor = $arg_cor;
    }

    # Metodo para obter a descrição do carro
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

    public function ExcessoVelocidade(){
       
        if($this->velocidade > 79){
          return $this->velocidade . " Execesso de Velocidade";
        }else{
           return $this->velocidade;
        }

    }

}

# Criar o objeto $carro1 instanciando a classe Carro
$carro1 = new Carro("Fiat", "Uno", "Verde");
$carro2 = new Carro("Honda", "Fit", "Cinza");

echo $carro1->obterCaracteristicas();

$carro1->acelerar(50);
echo " km/h <br>" . $carro1->ExcessoVelocidade() ;

$carro1->frear(15);
echo" km/h <br>" .  $carro1->ExcessoVelocidade();

$carro1->acelerar(70);
echo " km/h <br>" . $carro1->ExcessoVelocidade();

echo "<hr>";
echo $carro2->obterCaracteristicas();











