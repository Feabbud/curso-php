<?php
  class TiposUsuarios{
    public $id;
    public $nome;

    public static function listar(){
      $conexao = Conexao::conectarBanco();
      $query = "SELECT * FROM tipo_usuario ORDER BY tipo_usuario";

      $resultado = $conexao->query($query);
      $lista = $resultado->fetchALL();

      return $lista;
    }

    public function inserir(){
      $conexao = Conexao::conectarBanco();
      $query = "INSERT INTO tipo_usuario(tipo_usuario) VALUES (:tipoUsuario)";
      $stmt = $conexao->prepare($query);
      $stmt->bindValue(':tipoUsuario', $this->nome );
      $stmt->execute();
    }
  }