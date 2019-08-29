<?php
require_once "global.php";

class Usuarios{

  public $id;
  public $nome;
  public $email;
  public $senha;
  public $tipoUsuario;

  public function __construct($id = false) //passamos i id como false padrão. Se for verdadeiro ele já existe e vamos carregar os dados do banco
  {
      if($id){
        $this->id = $id;
        $this->carregar();
      }
  }


  public static function listar()
  {

    // throw new Exception("Erro ao listar arquivos");
    
    $conexao = Conexao::conectarBanco();
    //query que vai selecionar todos nossos usuários.
    $query = "SELECT id_usuario, nome_usuario, email_usuario, u.id_tipo_usuario, t.tipo_usuario as nome_tipo FROM usuarios u INNER JOIN tipo_usuario t ON u.id_tipo_usuario = t.id_tipo_usuario";
    //executamos nossa query com o método query(). Esse método retorna um objeto chamado PDOstatement que retorna as linhas do nosso banco.
    $resultado = $conexao->query($query);
    //para retornar nossas linhas do banco e tranformar ese retorno em array usamos o método fetchAll.
    $lista = $resultado->fetchAll();

    return $lista;
  }

  public function carregar(){
    $conexao = Conexao::conectarBanco();
    $query = "SELECT * FROM usuarios WHERE id_usuario = :id";     

    $stmt = $conexao->prepare($query);
    $stmt->bindValue(':id', $this->id);
    $stmt->execute();

    // $resultado = $conexao->query($query);

    $lista = $stmt->fetchAll();

    // print_r($resultado);

    foreach($lista as $linha){
      $this->nome = $linha["nome_usuario"];
      $this->email = $linha["email_usuario"];
    }
  }

  public function inserir()
  {
    $conexao = Conexao::conectarBanco();    
    //query que vai inserir nossos dados no banco
    // $query = "INSERT INTO usuarios (nome_usuario, email_usuario, senha_usuario, id_tipo_usuario) VALUES ('".$this->nome." ', '".$this->email."', '".$this->senha."', '".$this->tipoUsuario."')";
    //o método exec executa a query INSERT no PDO.
    // $result = $conexao->exec($query);

    // Query que será preparada para ser usada. Segura usando o PDOstatement
    $query = "INSERT INTO usuarios (nome_usuario, email_usuario, senha_usuario, id_tipo_usuario) VALUES (:nome, :email, :senha, :tipoUsuario)";
    $stmt = $conexao->prepare($query); //prepara a query para adicionarmos os dados.
    $stmt->bindValue(':nome', $this->nome); //valida os dados com mais segurança.
    $stmt->bindValue(':email', $this->email);
    $stmt->bindValue(':senha', $this->senha);
    $stmt->bindValue(':tipoUsuario', $this->tipoUsuario);
    $stmt->execute();//executa nossa query no banco de dados.
    
  }

  public function atualizar()//método de atualização de dados
  {
    $conexao = Conexao::conectarBanco();    
    $query = "UPDATE usuarios SET nome_usuario = :nome , email_usuario = :email WHERE id_usuario = :id"; 

    $stmt = $conexao->prepare($query);
    $stmt->bindValue(':nome', $this->nome);
    $stmt->bindValue(':email', $this->email);
    $stmt->bindValue(':id', $this->id);
    $stmt->execute();
    // $conexao->exec($query);
  }

  public function excluir()
  {
    $conexao = Conexao::conectarBanco();
    $query = "DELETE from usuarios WHERE id_usuario = :id";
    $stmt = $conexao->prepare($query);
    $stmt->bindValue(':id', $this->id);
    $stmt->execute();
    // $conexao->exec($query);
  }

}