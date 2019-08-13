<?php
  /*Para instalar o PHP baixamos o zip e colocamos o caminho da pasta no PATH do windows.
    Para ler arquivos na linha de comando usamos php nomeDoArquivo.php.
    Para fazer códigos PHP na linha de comando usamos php -a onde vai abrir um painel interativo na linha de comando.
    Para subir um servidor local utilizamos na linha de comando: php -S localhost:8080
  */

  //Mostrando informações na tela.
  echo "Hello World!";

  // Variáveis - onde guardamos informações para serem usadas em todo o sistema.
  $nome = "Felipe";

  /*Tipos de variáveis - linguagem dinamicamente tipada onde não precisamos dizer qual tipo da ariável que estamos usando.
    gettype($variavel) - verifica qual tipo de variavel que é.
  */
  $nome = "Claudia"; //String
  $numero = 300;//Integer
  $float = 3.5;//Float ou double
  $boolean = true;// true or false
  $array = array(2, 3, "Felipe", true);//conjunto de informações em uma única variável

    // Tipo String
      //Concatenando informações de variáveis com texto normal.
      //Possuímos caracteres especial que temos no php.net/strings.
      // PHP_EOL - PHP_EndOfLine - mesmo efeito de pular linha do \n.
      echo 'Meu nome é: ' .$nome. '.'; //String com aspas simples só é interpretado como string e precisamos concatenar variáveis com ".".
      echo "Meu nome é: $nome"; //String com aspas duplas interpreta as variáveis como variáveis.


  // Operações Matemáticas
  $soma = 10 + 10;
  $subtrasão = 10 - 10;
  $divisao = 10 / 10;
  $multiplicacao = 10 * 10;
  $exponenciacao = 2 ** 3; //2 elevado ao cubo.
  $restoDivisao = 10 % 3;
  $contador = $contador + 1;
  $contador += 1; //acrescenta 1 no valor da variável
  $contador -= 1; //diminui 1 no valor da variável
  $contador *= 1; //multiplica 1 no valor da variável
  $contador /= 1; //divide 1 no valor da variável
  $contador++; //acrescenta 1 no valor da variável
  $contador--; //diminui 1 no valor da variável
  ++$contador; //acrescenta antes 1 no valor da variável
  --$contador; //diminui antes 1 no valor da variável

   /*Arrays - lista de várias informações. Pode ser informações de todos os tipos; */

  // Array simples
  $array = array("index 0", "index 1", "index 2"); //ou
  $array = ["index 0", "index 1", "index 2"];

  /* Array assosiativo 
     Geralmente para usamos a chave com um número especifico como CPF ou RG.
     Usamos as chaves como string ou numero inteiro. PHP sempre tentará converter para número inteiro se estiver entre aspas o numero.sgit 
  */
  $array = array(
    "chave" => "valor",
    "chave" => "valor"
  ); // ou

  $array = [
    "chave" => "valor",
    "chave" => "valor"
  ];
  
  // Mostrando arrays associativos dentro de string
  //simples
  echo "Meu nome é $array[nome]."; //tiramos as aspas da chave e mostramos o valor do array.

  // Complexas
  echo "Meu nome é {$array['nome']}."; //forma mais complexa mas recomendada.

  // acessando arrays
  $array["index começando do 0"];
  $array["nome da chave"];

  //adicionar valores em array
  $array["chave ou index"] = "valor";//adiciona valor na chave/indice indicado.
  $array[] = "valor"; //adiciona o valor na ultima posição.

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

  // Variávei Globais - variáveis que são padrão do PHP. Exemplo:
  $_POST["nome"];
  $_GET["numero"];
  $_SERVER["SERVER"];

  // Variáveis Constantes - variáveis que não se alteram no sistema. true e false são constantes padrão do PHP
  define("NOME", "Valor");

  /* IF ELSE - verificador de se/senão

    se (condicao && condicao) { 
      faça isso 
    } senão { 
      faça isso
    } 

    se (condicao && condicao) { 
      faça isso 
    } senão se{ 
      faça isso
    } 

    Se o bloco do if tem somente uma linha, não precisamos das chaves.

    se (condição)
      faça esse código


    && - as duas condições tem que estar corretas;
    || - uma condição correta;
    ! - altera o valor de true para false e de false para true;
    != - diferente.

    Ternário
    $variavel = $condicao ? $valorSeVerdadeiro : $valorSeFalso;

    continue - pula a iteração.
    break - intenrompe o loop.

  */
  $condicao = true;
  if($condicao){
    echo "Felipe";
  } else {
    echo "Claudia";
  }

  if($condicao){
    echo "Felipe";
  } else if($condicao2){
    echo "Claudia";
  }

  /*Recebendo dados de formulários
    - usamos o if para fazer a validação dos dados;
    - isset - variável global para verificar se estamos recebendo os dados do formulário, se a variável existe;
    - $_POST['chave do input'];
    - && - se as duas condições forem verdadeiras;
    - empty - variável global que verifica se a nossa variável está vazia ou não;
      - !empty - verifica se a variável não está vazia;
    - armazenamos os dados em variáveis dentro do IF.
  */

  if( isset($_POST['email']) && !empty($_POST['email']) ){
    $email = $_POST['email'];
    $nome = $_POST['nome'];
  }

  /*Swicth - verificador para ver se a variavel 1 fazer 1, se for 2 fazer 2, se for 3 fazer 3, se não fazer o default. 
    Podemos usar o mesmo código para vários cases também.
  */

  switch( $variavel ){
    case 1: 
      echo "1";
      break;

    case 2: 
      echo "2";
      break;
    
    case 3:
    case 4:
    case 5:
      echo "3";
      break;

    default:
      echo "default";
      break;
  }

  // Usando arquivos múltiplos
  require "arquivo.php"; // código de importação de arquivo que para seu script se houver erros.
  require_once "arquivo.php"; // funciona igual ao require mas importamos só uma vez não precisamos importar várias vezes. Recomendado.
  include "arquivo.php"; // importa e só exibe uma mensagem de erro e continua o script.
