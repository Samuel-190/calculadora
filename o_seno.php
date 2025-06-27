<?php
echo"\nCALCULAR EL SENO DE UN ANGULO\n";
while(true) {
$lado=readline("Ingresa el lado opuesto del triangulo: ");
$hipotenusa=readline("Ingresa la hipotenusa del triangulo: ");
while(true) {
  if(!is_numeric($lado) || !is_numeric($hipotenusa)) {
    echo"En estos campos solo puedes ingresar numeros...";
    $lado=readline("Ingresa el lado opuesto del triangulo: ");
    $hipotenusa=readline("Ingresa la hipotenusa del triangulo: ");
  }elseif($lado>$hipotenusa) {
    echo"La hipotenusa nunca puede ser menor al lado opuesto, intentalo de nuevo...\n";
    $hipotenusa=readline("Ingresa la hipotenusa del triangulo: ");
}else{
    break;} 
}
$seno=$lado/$hipotenusa;
echo"\nEl seno de las longitudes ingresadas de tu triangulo es: ".$seno."\n";
$deseo=readline("¿desea calcular otro triungulo? (SI o NO): ");
 if ($deseo=="SI" || $deseo=="si") {
  echo"";
 }else{
  break;
 }
}