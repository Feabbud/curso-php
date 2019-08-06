<?php
  /*  While
        loop irá fazer algo até que a condição seja completa. Gera uma lista de alguma coisa.
        Temos que usar o incremento ou decremento para ele funcionar. x++ ou x--;
  */ 

  $x = 0;

  while( $x <= 10 ){
    echo "O x vale ".$x;
    $x++;
  } //enquanto o $x for menor ou igual a 10, ele mostra na tela o código.

  /*  FOR
        PARA ($varivavel = 0; condição; encremento ou decremento) { faça isso que tem aqui };
        Mais usado que o while.
  */

  for($x = 0; condição; $x++){
    echo "o valor de X -e ". $x;
  }

  /*  FOREACH - PARA CADA
        Loop que auxilia na listagem de arrays.
        Muito utilizado nos sistemas com listas.  
        
        paracadaitem( $array vaisercolocadonaváriavel $varRecebedora ){
          faça isso com o $varRecebedora;
        }
  */

  foreach( $array as $varRecebedora ){
    echo "O item que tem no array é " . $varRecebedora;
  }

  // Podemos criar um array com arrays dentro e recuperar as chaves do array

  $array = array(
    array("nome" => "Felipe"),
    array("nome" => "Claudio"),
    array("nome" => "José")
  );

  foreach( $array as $nomes ){
    echo "O aluno é ".$nomes["nome"];
  }

  // Para recuperar chave e valor a estrutura do foreach muda.

  foreach ($variable as $key => $value) {
    echo $key ." = ". $value; // chave = valor;
  }