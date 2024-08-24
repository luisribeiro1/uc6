<?php

# para definir uma classe definimos com "class" logo depois segue com o nome com a primeira letra maiúscula (por convenção PascalCase)
class Carro {
  /*
  pivate - só pode ser usado na própria classe
  protected - é usado na classe e em classes herdadas
  public - pode ser usado em qualqer lugar
  */

  # Atributos 
  private $cor;
  private $modelo;
  private $marca;
  private $velocidade = 0;

  # Métodos

  # Método construtor
  public function __construct($arg_marca, $arg_modelo, $arg_cor) {
    $this->marca = $arg_marca;
    $this->modelo = $arg_modelo;
    $this->cor = $arg_cor;
  }
  
  # Método para obter a descrição do carro (camelCase)
  public function obterCaracteristicas() {
    return "
      <br>Marca: ".$this->marca."
      <br>Modelo: ".$this->modelo."
      <br>Cor: ".$this->cor;
  }

  # Método para acelerar
  public function acelerar($quantidade) {
    $this-> velocidade += $quantidade;
  }

  # Método para frear
  public function frear($quantidade) {
    $this-> velocidade -= $quantidade;
    if($this-> velocidade < 0) {
      $this-> velocidade = 0;
    }
  }

  # Método para obter velocidade
  public function obterVelocidade() {
    return $this->velocidade;
  }

  # Aviso excesso de velocidade
  public function avisoExcessoVelocidade() {
    return $resultado = $this -> velocidade > 80 ? "Reduza a velocidade" : "" ;
    echo $resultado;

    // if($this->velocidade > 80) {
    //   echo 'Reduza a velocidade';
    // }
  }

  public function carroOnOff() {
    return $res = $this -> velocidade == 0 ? "O carro está desligado, ligue para começar a dirigir" : "" ;
    echo $res;
}


}

# Criar o objeto $carro1 instanciando a classe Carro
$carro1 = new Carro ("Fiat", "Uno", "Verde");
$carro2 = new Carro ("Honda", "Fit", "Cinza");

echo $carro1->obterCaracteristicas();


$carro1-> acelerar(0);
echo "<hr>" . $carro1-> carroOnOff() ."<br>";
$carro1-> acelerar(85);
echo $carro1-> obterVelocidade() . " km/h <br>";
echo $carro1-> avisoExcessoVelocidade() ."<br>";
echo $carro1-> carroOnOff() ."<br>";

$carro1-> frear(15);
echo $carro1-> obterVelocidade() . " km/h <br>";
echo $carro1-> avisoExcessoVelocidade() ."<br>";
echo $carro1-> carroOnOff() ."<br>";

$carro1-> acelerar(20);
echo $carro1-> obterVelocidade() . " km/h <br>";
echo $carro1-> avisoExcessoVelocidade() ."<br>";
echo $carro1-> carroOnOff() ."<br>";

$carro1-> frear(90);
echo $carro1-> obterVelocidade() . " km/h <br>";
echo $carro1-> avisoExcessoVelocidade() ."<br>";
echo $carro1-> carroOnOff() ."<br>";

echo "<hr>";
echo $carro2->obterCaracteristicas();
