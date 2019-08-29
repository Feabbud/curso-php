<?php
  require_once "global.php";

  try {
    $tipoUsuario = $_POST['tipo'];

    $tipos = new TiposUsuarios();
    $tipos->nome = $tipoUsuario;

    $tipos->inserir();

    header("Location: index.php");
  } catch (\Exception $error) {
    Erro::tratarErro($error);
  }