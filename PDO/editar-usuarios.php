<?php
  require_once "global.php";

  try {
    $id = $_GET["id"];
    $usuario = new Usuarios($id);
  } catch (\Exception $error) {
    Erro::tratarErro($error);
  }
  
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar</title>
</head>
<body>
  <form action="validacao-usuarios-update.php" method="post">

  <input type="hidden" name="id" value="<?= $usuario->id; ?>">

  <label for="nome">
    Nome:
    <input type="text" name="nome" id="nome" value="<?= $usuario->nome; ?>">
  </label>
  <label for="email">
    E-mail:
    <input type="text" name="email" id="email" value="<?= $usuario->email; ?>">
  </label>

  <p> <input type="submit" value="Cadastrar"></p>
  </form>
</body>
</html>