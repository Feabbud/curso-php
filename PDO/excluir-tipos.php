<?php
  require_once "global.php";

  try{
    $id = $_GET["id"];
    $tipo = new TiposUsuarios($id);
    $tipo->excluir();
    header("Location: index.php");
  }catch (\Exception $error) {
    Erro::tratarErro($error);
  }
  