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

  // number_format - formata numeros grandes. number_format(numero, casas decimais, caracter dezenas, caracter milhares);
  $var = number_format(8.521447855, 2); // mostra 2 numeros depois do ponto.
  $var = number_format(38325.32589, 2, ",", "."); // Mostra 2 numeros depois da virgula e muda o "." das dezenas e a virgula dos milhares para virgula nas dezenas e "." nos milhares.

  // str_replace - troca palavras em uma frase ou texto. str_replace("palavra que quero trocar", "palavra que vou colocar", string da frase ou texto);
  $text = "Felipe Ricardo Silveira Abbud";
  $var = str_replace("Abbud", "Lazzarotto", $text);//retorna Felipe Ricardo Silveira Lazzarotto

  /* strtolower() - transforma a string toda minuscula. 
     strtoupper() - transforma a string toda em maiúscula.
  */
  $var = strtolower("FELIPE");// retorna felipe
  $var = strtoupper("felipe");// retorna FELIPEs

  // substr() - retorna os caracteres de uma string conforme o número que você especificou. substr(string, posição onde começa, posição onde termina);
  $texto = "Felipe";
  $var = substr($texto, 0, 3); // Retorna Fel.

  /* ucfirst() - coloca a primeira letra da frase ou palavra em maiúsculo. 
     ucwords() - coloca a primeira letra de todas as palaras em maiúsculo.
  */
  $texto = "felipe ricardo";
  $var = ucfirst($texto); // Retorna Felipe ricardo
  $var = ucwords($texto); // Retorna Felipe Ricardo


