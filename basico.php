<?php
  // Variáveis - onde guardamos informações para serem usadas em todo o sistema.
  $nome = "Felipe";

  //Tipos de variáveis
  $nome = "Claudia"; //String
  $numero = 300;//Integer
  $float = 3.5;//Float
  $boolean = true;// true or false
  $array = array(2, 3, "Felipe", true);//conjunto de informações em uma única variável


  //Mostrando informações na tela.
  echo "Hello World!";

  //Concatenando informações de variáveis com texto normal.
  echo "Meu nome é: " .$nome. ".";

  /*Arrays
    - lista de várias informações;
    - pode ser informações de todos os tipos;
    - 
  */

  // array simples
  $array = array("index 0", "index 1", "index 2");

  // array com chaves
  $array = array(
    "chave" => "valor",
    "chave" => "valor"
  );

  // acessando arrays
  $array["index começando do 0"];
  $array["nome da chave"];

  //adicionar valores em array
  $array["chave ou index"] = "valor";

  //Mostrar todo o array na tela
  print_r($array);

  //Adicionando array dentro de array. Comum para produtos.
  $array = array(
    0 => array(
      "nome",
      "tipo",
      "preco"
    ),

    1 => array(
      "nome",
      "tipo",
      "preco"
    )
  );

  //Para adicionar uma informação na última posição fizemos:
    $array[] = "valor";