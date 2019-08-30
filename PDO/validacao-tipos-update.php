<?php

require_once "global.php";

try{
  $id = $_POST['id'];
  $tipo = $_POST['tipo'];

  $tipos = new TiposUsuarios($id);
  $tipos->nome = $tipo;
  $tipos->atualizar();

  header("Location: index.php");
}catch (\Exception $error) {
  Erro::tratarErro($error);
}

