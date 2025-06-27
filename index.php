<?php
$inten=0;
while(true) {
 if($inten<1) {
echo"Bienvenido a tu calculadora, aqui podras hacer operaciones basicas y intermedias.\n\nElige que tipo de operacion o accion quieres hacer:\n\n1-Operaciones basicas.\n2-Raices.\n3-Seno.\n4-Salir.\n\n";
 }else{
  echo"-Selecciona tu nueva accion en la calculadora:\n\nElige nuevamente que quieres hacer:\n\n1-Operaciones basicas.\n2-Raices.\n3-Seno.\n4-Salir.\n\n";
 }
$tipo=readline("elige el tipo segun el numero: ");
while($tipo!="1" and $tipo!="2" and $tipo!="3" and $tipo!="4") {
  echo"Lo que has ingresado no coincide con ninguna opcion...\n";
  $tipo=readline("elige el tipo segun el numero: ");
}
if ($tipo=="1") {
  include 'o_basicas.php';
  $inten+=1;
}elseif ($tipo=="2") {
 include 'o_raices.php';
 $inten+=1;
}elseif ($tipo=="3"){
 include 'o_seno.php';
 $inten+=1;
}else {
  echo"\n\nPrograma finalizado.";
  break; 
  exit;
}
}

