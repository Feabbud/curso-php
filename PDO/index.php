<?php
  /*
    PDO Aula 1
    - para criar uma conexão com o banco de dados fazemos:
      $var = new PDO('banco:host=ondeEstaHospedado'; 'dbname=nomedobanco'; 'login'; 'senha' );
    - depois criamos uma query para buscar nossas linhas para fazer um teste com a conexão
      $query = "SELECT * FROM usuarios";
    - executamos nossa query com o método query(). Esse método retorna um objeto chamado PDOstatement que retorna as linhas do nosso banco.
    - para retornar nossas linhas do banco, outras informações e transformar esse retorno em array usamos o método fetchAll.

    PDO Aula 2
    - para inserir dados no banco usamos o mesmo percurso do selecionar mudando apenas a query e o modo de execução da query.
    - na query usamos um query e para executar o insert usamos o método exec(), que apenas executa a query;
    - para organizarmos nosso código e facilitar algum tipo de atualização, fazemos uma classe conexao e dentro dessa classe criamos uma function static para criar nossa conexão. 
    
    PDO Aula 3 
    - Na class Usuarios, para editar os dados do banco, faremos um método de atualizar, onde conectamos com o banco, fizemos a query Update com os dados para atualização e depois executamos com o método exec() pois não precisa retornar nada do banco.
    - para carregar os dados do banco na página de edição, fizemos o método de carregar, onde vamos conectar o banco, criar um SELECT da tabela usando o WHERE para comparar o id e executamos essa query com o método query pois queremos as informações da tabela, no nosso caso as linhas;
    - faremos o fetchAll() para pegar esses dados em um lista e fizemos um foreach onde vão ser atualizados nossos dados;
    - criaremos um construct com o parâmetro de ID = false para usarmos em um if onde vamos ver se é passado algum dado, se sim carregamos os dados, se não inserimos no banco;
    - na página de edição vamos recuperar o id por GET e colocar em uma variável. Essa que vamos passar por parâmetro quando instanciarmos nossa classe, que fara automaticamente o carregamento dos dados, precisando somente dar um echo na nossa classe e usarmos seus atributos que precisarmos.
    - Vamos também fazer a exclusão, mesmo passo a passo dos outros métodos, conexão query de DELETE e execução com o exec() pois não precisamos retornar nada.
    - na página excluir, recuperamos o ID instanciamos nossa classe com o ID passado por parametro e usamos o método excluir da nossa classe.

    PDO Aula 4
    - criamos um arquivo de configuração onde colocamos constantes que não mudarão conforme o projeto for aumentando;
    - vamos criar também um arquivo global para fazer o require somente uma vez de nossas classes e organizar melhor nosso código.
    - criaremos uma função passando por parâmetro o nome da nossa classe;
    - faremos um if para testar se o arquivo existe (file_exists) no diretório especifico: file_exists('diretorio/ . $nomeClasse . '.php');
    - se existir vamos dar um require once no arquivo;
    - vamos usar uma função do php spl_autoload_register e colocar o nome da nossa função: spl_autoloaf_register('nomeFuncao');
    - chamaremo o nosso arquivo config nesse arquivo global e mudaremos em todos os arquivos que possuem um require.

    PDO Aula 5
    - vamos tratar os erros começando com o try/catch no começo do nosso arquivo listar;
    - criaremos uma variavel DEBUG = true para diferenciar os erros de desenvolvimento e produção;
    - se DEBUG for true mostra uma mensagem para o dev, se não mosra mesnsagem personalizada.
    - 
  */

  require_once "global.php";
  try {
    $usuarios = new Usuarios();
    $listas = $usuarios->listar();
  } catch (\Exception $error) {
    Erro::tratarErro($error);
  }
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php foreach($listas as $lista) : ?>
  <p>Nome: <?= $lista["nome_usuario"]; ?> - 
    <a href="editar-usuarios.php?id=<?= $lista["id_usuario"]; ?>"> Editar </a> 
    <a href="excluir-usuarios.php?id=<?= $lista["id_usuario"]; ?>"> Excluir </a> 
  </p>

  <?php endforeach; ?>

  <form action="validacao-usuarios.php" method="post">

    <label for="nome">
      Nome:
      <input type="text" name="nome" id="nome">
    </label>
    <label for="email">
      E-mail:
      <input type="text" name="email" id="email">
    </label>

    <label for="senha">
      Senha:
      <input type="password" name="senha" id="senha">
    </label>

    <p> <input type="submit" value="Cadastrar"></p>
  </form>
  
</body>
</html>