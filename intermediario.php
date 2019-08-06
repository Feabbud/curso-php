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

  // Funções

  function nomeDaFuncao (parametros ou não){
    $variavel = "alguma coisa";

    return $variavel;

    //ou

    return "alguma coisa";
  }

  //passamos a usar a function da maneira abaixo

  $resultado = nomeDaFuncao(parametro, parametro);

  // Date - função do PHP para manipular datas. Verificar o php.net/date

  $dataAtual = date("d-m-Y \à\s H:i:s"); // Exemplo que mostra o dia mes e ano completo com o horário hora:minutos:segundos.

  //  Funções Matemáticas
  echo abs(-10); // Retorna o número absoluto do parâmetro, que n caso é 10.

  //  Round - Retorna o número arredondado do número do parâmetro. De 5 para cima arredonda para 10, abaixo arredonda para 0.
  echo round(5.8);// 6 
  echo round(5.5); // 5

  // Ceil - sempre arredonda para cima
  echo ceil(2.5); //3
  echo ceil(2.2); //3

  // Floor - sempre arredonda para baixo
  echo floor(2.8); //2
  echo floor(2.2); //2

  // Rand - Gera um número aleatório. Muito usado para sorteios com arrays.
  echo rand(2, 10); //  rand(numMin, numMax);

  $sorteio = array("felipe", "sacha", "baguero", "choco", "bella");
  $resultado = rand(0, 4);

  echo "O ganhador do sorteio é: ".$sorteio[$resultado];

  // Manipulação de textos

  // Explode - divide minha string em array no lugar onde queremos. explode("onde queremos explodir", string para explodir);
  $nome = "Felipe Ricardo";
  $divisao = explode(" ", $nome);

  // Implode - junta um array e transforma em uma string. implode("o que colocamos no lugar das virgulas do array", variavel do array);
  $array = array("felipe", "ricardo", "silveira");
  $juntar = implode(" ", $array);