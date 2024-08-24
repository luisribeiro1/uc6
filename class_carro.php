<?php

class Carro {

    # private (privado): só pode ser usado na própria classe
    # protected (protegido): Própria classe em classes importadas/herdadas
    # public (público): Pode ser usado em qualquer parte do projeto

    # Atributos (privados, protegidos, públicos)
    private $cor;
    private $modelo;
    private $marca;
    private $velocidade = 0;

    # Métodos

    # Método Construtor
    public function __construct($arg_marca,$arg_modelo,$arg_cor){
        $this->marca = $arg_marca;
        $this->modelo = $arg_modelo;
        $this->cor = $arg_cor;
    }

    # Método para obter a descrição do carro
    public function obterCaracteristicas(){
        return "Marca: ".$this->marca."<br>Modelo: ".$this->modelo."<br>Cor: ".$this->cor;
    }

    # Método para acelerar e freiar
    public function acelerar($quantidade){
        $this->velocidade += $quantidade;
   }

   public function freiar($quantidade){
        $this->velocidade -= $quantidade;
        if($this->velocidade < 0){
            $this->velocidade = 0;
        }
   }

   public function obterVelocidade(){
        return " <br> Velocidade atual: ".$this->velocidade;
   }

   public function avisoExcessoVelocidade(){
        if($this->velocidade > 80){
            return "<br> Excesso de velocidade, Reduza para 80 Km/h.";
        }elseif($this->velocidade == 80){
            return "<br> Mantenha-se a 80 Km/h.";
        }else{
            return "<br> Siga o limite da via. ";
        }
   }

}


# Criar o objeto $carro1 instanciando a classe Carro
$carro1 = new Carro("Fiat","Uno","Verde");
$carro2 = new Carro("Honda","Fit","Cinza");
echo $carro1->obterCaracteristicas();
$carro1->acelerar(40);
echo $carro1->obterVelocidade() . " Km/h";
$carro1->freiar(15);
echo $carro1->obterVelocidade() . " Km/h";
$carro1->acelerar(25);
$carro1->acelerar(30);
echo $carro1->obterVelocidade() . " Km/h";
echo $carro1->avisoExcessoVelocidade();
echo "<hr>";
echo $carro2->obterCaracteristicas();