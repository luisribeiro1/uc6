<?php

class Carro {

    # Atributos 
    private $cor;
    private $modelo;
    private $marca;
    private $velocidade = 0;

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

    # Metodo para acelerar
    public function acelerar($quantidade){
        $this->velocidade += $quantidade;
        $this->verificarVelocidade();
    }

    # Metodo para frear
    public function frear($quantidade){
        $this->velocidade -= $quantidade;
        if($this->velocidade < 0){
            $this->velocidade = 0;
        }
        $this->verificarVelocidade();
    }

    # Método para obter a velocidade
    public function obterVelocidade(){
        return $this->velocidade;
    }
    
    # Método para verificar e gerar o aviso de velocidade
    public function verificarVelocidade(){
        if ($this->velocidade > 80) {
            return "Reduza a velocidade!";
        }
    }

}

# Criar o objeto $carro1 instanciando a classe Carro
$carro1 = new Carro("Fiat","Uno","Verde");
$carro2 = new Carro("Honda", "Fit", "Cinza");

echo $carro1->obterCaracteristicas() . "<br>";

$carro1->acelerar(40);
echo $carro1->obterVelocidade() . "km/h <br>";

$carro1->frear(15);
echo $carro1->obterVelocidade() . "km/h <br>";

$carro1->acelerar(25);
echo $carro1->obterVelocidade() . "km/h <br>";

$carro1->acelerar(40);
echo $carro1->obterVelocidade() . "km/h <br>";
echo $carro1->verificarVelocidade();

echo "<hr>";
echo $carro2->obterCaracteristicas();

?>
