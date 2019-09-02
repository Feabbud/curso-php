<?php require_once "global.php"; ?>
<?php
  try {
    $id = $_GET["id"];
    $tipo =  new TiposUsuarios($id);
    $tipo->carregarUsuarios();
    $listaUsuarios = $tipo->usuarios;
  } catch (\Exeception $error) {
    Erro::tratarErro($error);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h2>Categoria</h2>

  <ul>
    <li>
      <b>Id</b>
      <p><?= $tipo->id; ?></p>
    </li>

    <li>
      <b>Nome</b>
      <p><?= $tipo->nome; ?></p>
    </li>
  </ul>

  <ul>
    <h2>Usuarios dessa Categoria</h2>
    <?php if(count($listaUsuarios) > 0) : ?>
      <?php foreach ($listaUsuarios as $lista) :?>
      <li>
        <h3>Nome Usuario</h3>
        <p><?= $lista["nome_usuario"]; ?></p>

        <h3>Email</h3>
        <p><?= $lista["email_usuario"]; ?></p>
      </li>
      <?php endforeach; ?>
    <?php else : ?>
      <p>Não existe produto para essa categoria.</p>
    <?php endif; ?>
  </ul>
    
</body>
</html>