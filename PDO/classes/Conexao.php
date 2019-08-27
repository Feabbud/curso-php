<?php
  require_once "global.php";

  class Conexao{
    public static function conectarBanco(){
      //conexao ao banco de dados com PDO. SGDB que usamos, o host ond está hospedado, o nome do banco, login e senha.
      $conexao =  new PDO(DB_DRIVE . ':host=' .DB_HOSTNAME. '; dbname='. DB_DATABASE , DB_USERNAME, DB_PASSWORD); 

      $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $conexao;
      
    }
  }