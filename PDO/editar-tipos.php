<?php
  require_once "global.php";

  try {
    $id = $_GET["id"];
    $tipos = new TiposUsuarios($id);
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
  <form action="validacao-tipos-update.php" method="post">

  <input type="hidden" name="id" value="<?= $tipos->id; ?>">

  <label for="tipo">
    Tipo de usuario
    <input type="text" name="tipo" id="tipo" value="<?= $tipos->nome; ?>">
    </label>

  <p> <input type="submit" value="Atualizar"></p>
  </form>
</body>
</html>