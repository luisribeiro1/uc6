<?php
/* Função de Usuário e Funções Nativas */

echo soma();
# função que não retorna valor
function soma() {
  $resultado = 25 + 33;
  echo $resultado;
}
echo "<br>----------------------------------------<br>";

# função que retorna valor
function mult() {
  $resultado = 9 * 9;
  return $resultado;
}
echo mult();
echo "<br>----------------------------------------<br>";

#função que recebe parâmetros
# neste caso, o segundo parâetro é opcional, e o valor 1 será usado quando o segundo parâmetro não for informado
function outraSoma($numero1, $numero2 = 1) {
  $resultado = $numero1 + $numero2;
  return $resultado;
}
echo outraSoma(mult());
echo "<br>----------------------------------------<br>";


?>