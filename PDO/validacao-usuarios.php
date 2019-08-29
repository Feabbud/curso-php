<?php
  require_once "classes/Usuarios.php";
  try{
    //pegamos os dados do formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = md5($_POST['senha']);
  $tipoUsuario = $_POST['tipos'];


  //instanciamos a classe
  $usuario = new Usuarios();

  //adicionamos os dados nos atributos da classe
  $usuario->nome = $nome;
  $usuario->email = $email;
  $usuario->senha = $senha;
  $usuario->tipoUsuario = $tipoUsuario;

  //inserimos os dados no banco
  $usuario->inserir();

  //retornamos para a página principal.
  header("Location: index.php");
  } catch (\Exception $error) {
      Erro::tratarErro($error);
  }
  