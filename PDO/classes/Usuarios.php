<?php
require_once "global.php";

class Usuarios{

  public $id;
  public $nome;
  public $email;
  public $senha;

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
    $query = "SELECT id_usuario, nome_usuario, email_usuario, u.id_tipo_usuario, t.tipo_usuario  FROM usuarios u INNER JOIN tipo_usuario t ON u.id_tipo_usuario = t.id_tipo_usuario"; 
    //executamos nossa query com o método query(). Esse método retorna um objeto chamado PDOstatement que retorna as linhas do nosso banco.
    $resultado = $conexao->query($query);
    //para retornar nossas linhas do banco e tranformar ese retorno em array usamos o método fetchAll.
    $lista = $resultado->fetchAll();

    return $lista;
  }

  public function carregar(){
    $conexao = Conexao::conectarBanco();
    $query = "SELECT * FROM usuarios WHERE id_usuario = " .$this->id;     

    $resultado = $conexao->query($query);

    $lista = $resultado->fetchAll();

    foreach($lista as $linha){
      $this->nome = $linha["nome_usuario"];
      $this->email = $linha["email_usuario"];
    }
  }

  public function inserir()
  {
    $conexao = Conexao::conectarBanco();    
    //query que vai inserir nossos dados no banco
    $query = "INSERT INTO usuarios (nome_usuario, email_usuario, senha_usuario) VALUES ('".$this->nome." ', '".$this->email."', '".$this->senha."')";
    //o método exec executa a query INSERT no PDO.
    $result = $conexao->exec($query);
  }

  public function atualizar()//método de atualização de dados
  {
    $conexao = Conexao::conectarBanco();    
    $query = "UPDATE usuarios SET nome_usuario = '" .$this->nome. "' , email_usuario =  '" . $this->email."' WHERE id_usuario = ". $this->id; 

    $conexao->exec($query);
  }

  public function excluir()
  {
    $conexao = Conexao::conectarBanco();
    $query = "DELETE from usuarios WHERE id_usuario = " .$this->id;
    $conexao->exec($query);
  }

}