<?php
  class TiposUsuarios{
    public $id;
    public $nome;

    public function __construct($id = false)
    {
      if($id){
        $this->id = $id;
        $this->carregar();
      }
    }

    public function carregar()
    {
      $conexao = Conexao::conectarBanco();
      $query = "SELECT id_tipo_usuario, tipo_usuario FROM tipo_usuario WHERE id_tipo_usuario = :id";
      $stmt = $conexao->prepare($query);
      $stmt->bindValue(':id', $this->id);
      $stmt->execute();

      $linha = $stmt->fetch();
      $this->nome = $linha["tipo_usuario"];
    }

    public static function listar(){
      $conexao = Conexao::conectarBanco();
      $query = "SELECT * FROM tipo_usuario ORDER BY tipo_usuario";

      $resultado = $conexao->query($query);
      $lista = $resultado->fetchALL();

      return $lista;
    }

    public function inserir()
    {
      $conexao = Conexao::conectarBanco();
      $query = "INSERT INTO tipo_usuario(tipo_usuario) VALUES (:tipoUsuario)";
      $stmt = $conexao->prepare($query);
      $stmt->bindValue(':tipoUsuario', $this->nome );
      $stmt->execute();
    }

    public function atualizar()
    {
      $conexao = Conexao::conectarBanco();
      $query = "UPDATE tipo_usuario SET tipo_usuario = :tipoUsuario WHERE id_tipo_usuario = :id";
      $stmt = $conexao->prepare($query);
      $stmt->bindValue(':tipoUsuario', $this->nome);
      $stmt->bindValue(':id', $this->id);
      $stmt->execute();
    }

    public function excluir()
    {
      $conexao = Conexao::conectarBanco();
      $query = "DELETE FROM tipo_usuario WHERE id_tipo_usuario = :id";
      $stmt = $conexao->prepare($query);
      $stmt->bindValue(':id', $this->id);
      $stmt->execute();
    }
  }