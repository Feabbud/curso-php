<?php
  /*Para instalar o PHP baixamos o zip e colocamos o caminho da pasta no PATH do windows.
    Para ler arquivos na linha de comando usamos php nomeDoArquivo.php.
    Para fazer códigos PHP na linha de comando usamos php -a onde vai abrir um painel interativo na linha de comando.
  */

  // Variáveis - onde guardamos informações para serem usadas em todo o sistema.
  $nome = "Felipe";

  //Tipos de variáveis
  $nome = "Claudia"; //String
  $numero = 300;//Integer
  $float = 3.5;//Float
  $boolean = true;// true or false
  $array = array(2, 3, "Felipe", true);//conjunto de informações em uma única variável

  // Operações Matemáticas
  $soma = 10 + 10;
  $subtrasão = 10 - 10;
  $divisao = 10 / 10;
  $multiplicacao = 10 * 10;
  $exponenciacao = 2 ** 3; //2 elevado ao cubo.
  $restoDivisao = 10 % 3;

  //Mostrando informações na tela.
  echo "Hello World!";

  //Concatenando informações de variáveis com texto normal.
  echo "Meu nome é: " .$nome. ".";

  /*Arrays - lista de várias informações. Pode ser informações de todos os tipos; */

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

  // Variávei Globais - variáveis que são padrão do PHP. Exemplo:
  $_POST["nome"];
  $_GET["numero"];
  $_SERVER[];

  // Variáveis Constantes - variáveis que não se alteram no sistema. true e false são constantes padrão do PHP
  define("NOME", "Valor");
  

  /* IF ELSE - verificador de se/senão

    se (condicao && condicao) { 
      faça isso 
    } senão { 
      faça isso
    } 

    && - as duas condições tem que estar corretas;
    || - uma condição correta;
    ! - altera o valor de true para false e de false para true

  */
  $condicao = true;
  if($condicao){
    echo "Felipe";
  } else {
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
  require_once "arquivo.php"; // funciona igual ao require mas importamos só uma vez não precisamos importar várias vezes.
  include "arquivo.php"; // importa e só exibe uma mensagem de erro e continua o script.
