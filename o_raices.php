<?php
echo "\nCALCULADORA DE RAÍCES\n\n";
while (true) {
 $num=readline("Ingresa el número del que deseas sacar raíz: ");
 $tipo=readline("¿Qué raíz deseas calcular? (2 para cuadrada, 3 para cúbica): ");
 while (!is_numeric($num) || !is_numeric($tipo)) {
  echo "Solo puedes ingresar números válidos.\n";
  $num = readline("Ingresa el número del que deseas sacar raíz: ");
  $tipo = readline("¿Qué raíz deseas calcular? (2 para cuadrada, 3 para cúbica): ");
 }
while(true) {
if ($tipo <= 0) {
  echo "El índice debe ser mayor que cero. Intentalo de nuevo\n";
  $tipo=readline("¿Qué raíz deseas calcular? (2 para cuadrada, 3 para cúbica): ");
}else{
  break;}
}
$num1 = floatval($num);
$indice = intval($tipo);
$raiz = pow($num1, 1 / $indice);
if ($indice % 2 == 0 && $num1 > 0) {
  echo "\nLa raíz de $num1 es: $raiz\n";
}else{
  echo "\nLa raíz de $num1 es: $raiz\n";}
$deseo = readline("\n¿Desea hacer otra raíz? (SI o NO): ");
  if($deseo != "SI" && $deseo != "si") {
    break;
  }
}
?>