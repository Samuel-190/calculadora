<?php
echo"\nOPERACIONES BASICAS\n";
while (true) {
echo"\nSelecciona la operacion basica a ejecutar:\n\n1-suma\n2-resta\n3-multiplicacion\n4-division\n\n";
$ope=readline("elige una segun el numero: ");
$suma=0;
$resta=0;
$multi=1;
$division=0;
if ($ope=="1") {
 $cuantos=readline("¿ Cuantos numeros vas a operar ?: ");
 while(true) {
  if ($cuantos==0 or $cuantos==1) {
    echo"Debes ingresar por lo menos 2 numeros, intentalo de nuevo...\n";
    $cuantos=readline("¿ Cuantos numeros vas a operar ?: ");
  }else{
    break;}
  }
 for($i=1;$i<$cuantos+1;$i++) {
   $num=readline("Ingresa el ".$i." numero: ");
   $suma=$suma+$num;
 }
echo "\nLa suma de tus numeros ingresados es: ".$suma."\n";
$deseo=readline("¿desea hacer otra operacion basica? (SI o NO): ");
while($deseo!="SI" and $deseo!="si" and $deseo!="NO" and $deseo!="no") {
  echo"Aqui solo puedes ingresar un SI o un NO...\n";
  $deseo=readline("¿desea hacer otra operacion basica? (SI o NO): ");
}
 if ($deseo=="SI" || $deseo=="si") {
  echo"";
 }else{
  break;
 }
}elseif ($ope=="2") {
 $lista=[];
 $cuantos=readline("¿ Cuantos numeros vas a operar ?: ");
 while(true) {
  if ($cuantos==0 or $cuantos==1) {
    echo"Debes ingresar por lo menos 2 numeros, intentalo de nuevo...";
    $cuantos=readline("¿ Cuantos numeros vas a operar ?: ");
  }else{
    break;}
  }
 for($i=1;$i<$cuantos+1;$i++) {
   $num=readline("Ingresa el ".$i." numero: ");
   $lista[]=$num;
 }
  $resta = $lista[0];
  for ($i = 1; $i < count($lista); $i++) {
    $resta -= $lista[$i];
 }
 echo"\nLa resta de los numeros ingresados es: ".$resta."\n";
 $deseo=readline("¿desea hacer otra operacion basica? (SI o NO): ");
 while($deseo!="SI" and $deseo!="si" and $deseo!="NO" and $deseo!="no") {
  echo"Aqui solo puedes ingresar un SI o un NO...\n";
  $deseo=readline("¿desea hacer otra operacion basica? (SI o NO): ");
}
 if ($deseo=="SI" || $deseo=="si") {
  echo"";
 }else{
  break;
 }
}elseif($ope=="3") {
$cuantos = readline("¿Cuantos numeros vas a operar?: ");
while(true) {
  if ($cuantos==0 or $cuantos==1) {
    echo"Debes ingresar por lo menos 2 numeros, intentalo de nuevo...";
    $cuantos=readline("¿ Cuantos numeros vas a operar ?: ");
  }else{
    break;}
  }
  for ($i = 1; $i <= $cuantos; $i++) {
    $num = readline("Ingresa el ".$i." numero: ");
    $multi *= $num;
  }
echo"\nLa multiplicacion de los numeros ingresados es: ".$multi."\n";
 $deseo=readline("¿desea hacer otra operacion basica? (SI o NO): ");
 while($deseo!="SI" and $deseo!="si" and $deseo!="NO" and $deseo!="no") {
  echo"Aqui solo puedes ingresar un SI o un NO...\n";
  $deseo=readline("¿desea hacer otra operacion basica? (SI o NO): ");
}
 if ($deseo=="SI" || $deseo=="si") {
  echo"";
 }else{
  break;
 }
}else{
  $num1=readline("ingresa el dividendo: ");
  $num2=readline("ingresa el divisor: ");
  while(true) {
    if ($num2==0) {
      echo"No se puede dividir entre 0 bruto, intentalo de nuevo...\n";
      $num2=readline("ingresa el divisor de nuevo: ");
    }else{
      break;}
  }
  $division=$num1/$num2;
  echo"\nLa division de los numeros ingresados es: ".$division."\n";
 $deseo=readline("¿desea hacer otra operacion basica? (SI o NO): ");
 while($deseo!="SI" and $deseo!="si" and $deseo!="NO" and $deseo!="no") {
  echo"Aqui solo puedes ingresar un SI o un NO...\n";
  $deseo=readline("¿desea hacer otra operacion basica? (SI o NO): ");
}
 if ($deseo=="SI" || $deseo=="si") {
  echo"";
 }else{
  break;
 }
}
}
?> 
