<?php

/*
  Aula 1 - apresentação try catch
  - try - bloco de código que iremos fazer para tratar o erro;
  - catch - bloco de código que passamos o erro.

  Aula 2 - Lançando exceções
  - throw new Exception("Exceção") - cria uma exceção personalizada;
  - InvalidArgumentException -  exceção para argumentos inválidos;

  Aula 3 - Tratamento e exceções
  - para um bloco try, podemos ter quantos catch forem necessários;
  - classe Exception é correto deixar por último pois pega todas as exceptions e pode passar uma despercebido;
  - Antes de começar a fazer as validações, verificar os erros pré definidos.
*/

require "ContaCorrente.php";

$contaJoao = new ContaCorrente("joao", 36749, 127893, 3000 );
$contaMaria = new ContaCorrente("Maria", 36749, 132589, 5000 );
$contaClaudia = new ContaCorrente("Claudia", 36749, 142587, 10000 );
$contaFelipe = new ContaCorrente("Felipe", 36749, 153587, 1000 );
$contaBella = new ContaCorrente("Bella", 36749, 185587, 5000 );
$contaSacha = new ContaCorrente("Sacha", 36749, 192587, 6000 );
$contaChoco = new ContaCorrente("Choco", 36749, 162587, 8000 );

echo ContaCorrente::$totalDeContas;
echo "<br>";
echo number_format(ContaCorrente::$taxaOperacao, 2, ",", ".");

echo "<br>";

echo "<pre>";
var_dump($contaBella);
echo "</pre>";

try {
  $contaBella->transferir(1000, $contaFelipe);
} catch (\InvalidArgumentException $error) {
  echo "Invalid Argument. ";
  echo $error->getMessage();
} catch (\Exception $error){
  echo "Exception. ";
  echo $error->getMessage();
}

echo "<pre>";
var_dump($contaBella);
echo "</pre>";
