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
  }