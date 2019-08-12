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

  // Manipulação de arrays
  // array_keys() - retorna outro array somente com os as chaves de um array mostrando sua posição.
  $array = array(
    "nome" => "Felipe",
    "idade" => "30",
    "cidade" => "Garopaba"
  );

  $key = array_keys($array); // Retorna [0] => nome, [1] => idade, [2] => cidade.

  // array_values() - retorna os valores do array mostrando sua posição
  $values = array_values($array); // retorna [0] => Felipe, [1] => 30, [2] => Garopaba.

  //  array_pop() - não retorna nada. Remove o último registro do array.
  $removeUltimo = array_pop($array); // retorna o array sem cidade => Garopaba.

  // array_shift() - na retorna nada. Remove o primeiro registro do array.
  $removePrimeiro = array_shift($array); // retorna o array sem nome => Felipe

  // asort() - ordena os registro de um array em ordem alfabética dos valores.
  // arsort() - ordena os registros de um array em ordem alfabética dos valores reversa.
  asort($array);
  arsort($array);

  // count() - conta quantos registros tem no array. 
  echo "Total de alunos:  ".count($array); // retorna quantos registros possui o array.

  // in_array() - checa se possui o valor dentro do array. Usado bastante em IF. in_array("valor", $array);

  if(in_array("Felipe", $array)){
    echo "O vencedor é o Felipe";
  }

/* Introdução a Criptografia
    md5() - tipo de criptografia irreversível. Usado bastante para senhas
    base64_encode() - criptografia reversível. 
    base64_decode() - descriptografa o base64.
*/

/*
  SQL
    Criando banco de dados - create database nome_do_banco;

    Tipos de dados
    - inteiro(integer), varchar(strings), date(datas), datatime(ano, mês, dia, hora, segundo);
    - para deixar em branco em um possivel cadastro(não obrigatório), anotamos como mulo no phpmyadmin;
    - primary key, chave única;
    - AI, auto incremento;

    Comandos de seleção - SELECT
      SELECT coluna FROM tabela; - select geral de uma coluna específica;
      SELECT coluna, coluna FROM tabela; - select de várias colunas específicas;
      SELECT * FROM tabela; - select de todos os dados.

    Comando para inserção de dados - INSERT
      INSERT INTO  tabela SET campo = ‘valor’, campo = ‘valor’; Funciona só no mysql;
      INSERT INTO tabela (campo, campo) VALUES (‘valor’, ‘valor’); Funciona em todos os bancos.
   
    Comando para atualização - UPDATE
      UPDATE tabela SET campo_mudar = ‘campo_novo’ where ID = valor_id;

    Comando para deletar - DELETE
      DELETE from tabela WHERE id  = valor_id;

    Filtrar com WHERE
      usamos combinado com o WHERE o AND(e) ou o OR(ou);
      SELECT * FROM tabela WHERE id = valor_id AND nome = ‘valor_nome’;
      SELECT * FROM tabela WHERE id = valor_id OR id = valor_id;

    Melhorando as pesquisas - LIKE, BETWEEN e IN
      LIKE - recurso de select que procura no banco se o dado contém os caracteres ou não. Usamos a % antes para procurar o dado que termina com o caractere, depois para procurar quando começa com o caractere ou antes e depois para procurar o que contém o caractere em qualquer parte.
        SELECT * FROM tabela WHERE campo LIKE ‘%caractere%’; contém em tudo;
        SELECT * FROM tabela WHERE campo LIKE ‘%caractere’; contém no começo;
        SELECT * FROM tabela WHERE campo LIKE ‘%caractere’; contém no final.

      BETWEEN - recurso usado para pesquisar valores entre duas condições. Números ou datas.
        SELECT * FROM tabela WHERE campo BETWEEN ‘campo’ and ‘campo’.

      IN - recurso usado para pesquisar dados que contém dentro de uma lista específica;
        SELECT * FROM tabela WHERE campo IN (dado1, dado2).

      HAVING - basicamente a mesma coisa que o WHERE, mas é usado para filtrar quando queremos criar uma coluna somente para aparecer na consulta;
        SELECT *, nome AS ‘login usuários’ FROM tabela HAVING nome LIKE ‘%caractere%’;
        Seleciona tudo e coloca os dados que contém o caractere específico na nova coluna login usuários. Com o WHERE daria erro.

      ORDER BY - ordena por algum campo específico;
        SELECT * FROM tabela ORDER BY campo ASC/DESC. ASC padrão crescente. DESC decrescente.

      LIMIT - quantidade de registros que queremos buscar. Para pular registros utilizamos a vírgula (,).
        SELECT * FROM tabela LIMIT 1, 2; Pula o primeiro e retorna 2 registros;
        SELECT * FROM tabela LIMIT 2; Retorna 2 registros;

      GROUP BY - faz a contagem dos registros selecionados, seleciona eles e agrupa colocando em uma nova coluna
        SELECT COUNT(*) as contagem, campoQueVamosContar FROM tabela GROUP BY campoQueQueremosAgrupar
        seleciona tudo e faz uma contagem colocando na nova coluna contagem, selecionamos todos os campos que queremos depois e agrupamos pelo campo que queremos.
    
    Consultando em mais de uma tabela - JOIN
      - para mostrar o campo nessa consulta, usamos o nomedatabela.nomedocampo;
          JOIN sempre antes dos filtros WHERE e HAVING
          
          INNER JOIN: só vai retornar registros se a seleção for bem sucedida. Registros que não tem relacionamento entre as tabelas não serão mostrados;
          SELECT tabela1.campo, tabela2.campo FROM tabelaPrincipal INNER JOIN tabela.secundária ON tabela2.campo = tabela1.campo;

          LEFT JOIN: retorna todos os registros da tabela da esquerda, independente se tem relação ou não;
          RIGHT JOIN: retorna todos os registros da direita, independente se tem relação ou não;

    Criação de funções
      facilita para facilitar algumas tarefas repetitivas.
      alteramos o DELIMITER (o padrão é o ;) para diferenciar e depois de fazer a função retornamos para o padrão;
    
      DELIMITER $$
        CREATE FUNCTION nomeMaiusculo(param TIPO(100)) //criar a função
        RETURNS TIPO(100) //o que vai ser retornado
        BEGIN  //inicio
          DECLARE nome TIPO(100); //declaramos uma variável
        SET nome = alguma coisa; //utilizando a variável
        RETURN nome; //retorna
            END$$ //finaliza a função
      DELIMITER; //volta o delimiter para o padrão ;

    Separando grupos de dados em base gigante - CREATE VIEW
      tabela criada para visualização apenas;
      diminui o processamento se a base for muito grande;
      separa por grupos específicos;
      
      CREATE VIEW nomeDaView as | criamos a view 
          SELECT * FROM tabela WHERE condição | colocamos a seleção que queremos separar

  */

  /* SQL injection - técnicas para injetar códigos maliciosos pelo mysql.
     Usamos addslashes($variavel) para proteger nosso banco.
  */
  $autor = addslashes($_POST["busca"]);

  /* Sessões e Cookies */
  //Session - enquanto o navegador está aberto, a sessão fica armazenada no servidor, fechando, o valor da sessão se apaga.
  session_start(); //inicia a sessão.
  $_SESSION["chave"] = "valor da sessão"; //armazena um valor na seção com o nome chave.

  // Cookie - salva um valor no navegador por tempo determinado. setcookie("chave", "valor armazenado", tempo de expiração em segundos);
  setcookie("chave", "valor armazenado", time()+3600); //tempo de expiração de 1hr
  $_COOKIE["chave"]; //mostra o valor armazenado.





