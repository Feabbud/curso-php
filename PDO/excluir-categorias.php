<?php
  require_once "global.php";

  try{
    $id = $_GET["id"];
    $usuario = new Usuarios($id);
    $usuario->excluir();
    header("Location: index.php");
  }catch (\Exception $error) {
    Erro::tratarErro($error);
  }
  