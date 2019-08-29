<?php

require_once "classes/Usuarios.php";

try{
  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $tipos = $_POST['tipos'];

  $usuario = new Usuarios($id);

  $usuario->nome = $nome;
  $usuario->email = $email;
  $usuario->tipoUsuario = $tipos;

  $usuario->atualizar();

  header("Location: index.php");
}catch (\Exception $error) {
  Erro::tratarErro($error);
}

