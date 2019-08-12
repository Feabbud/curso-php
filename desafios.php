<?php
 /* 
 Desafio numero impar
  $contador = 0;

  while($contador <= 100){
    if($contador % 2 != 0){
      echo $contador;
      echo PHP_EOL;
    }
    $contador++;
  }

  for($contador = 0; $contador <= 100; $contador++){
    if($contador % 2 != 0){
      echo $contador . PHP_EOL;
    }
  }
*/

/* Desafio Tabuada 
$numero = 7;
for($x = 1; $x <= 10; $x++){
  
  $tabuada = $numero * $x;
  echo "$numero x $x = $tabuada" . PHP_EOL;

}
*/

/* Desafio IMC
    $IMC = peso / (altura ** 2);
*/

$altura = 1.68;
$peso = 72;
$IMC = $peso/ $altura ** 2;

echo "Seu IMC é de $IMC e você esta ";

if($IMC < 18 ){
  echo "abaixo do";
} else if( $IMC > 18 && $IMC < 25){
  echo "no padrão ";
} else {
  echo "acima do";
}

echo " recomendado.";



