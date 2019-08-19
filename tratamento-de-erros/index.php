<?php

/*
  Aula 1 - apresentação try catch
  - try - bloco de código que iremos fazer para tratar o erro;
  - catch - bloco de código que passamos o erro.
*/

require "ContaCorrente.php";

$contaJoao = new ContaCorrente("joao", 36749, 127893, 3000 );
$contaMaria = new ContaCorrente("Maria", 36749, 132589, 5000 );
$contaClaudia = new ContaCorrente("Claudia", 36749, 142587, 10000 );

echo ContaCorrente::$totalDeContas;
echo "<br>";
echo ContaCorrente::$taxaOperacao;