<?php

require_once "Calculadora.php";

/*
  Array - Aula 1
  - sizeof - retorna o número de elementos que tem o array;
  - 
*/

$notas = [9, 3, 10, 5, 10, 8, 10];

$calculadora = new Calculadora();

echo $calculadora->calculaMedia($notas);